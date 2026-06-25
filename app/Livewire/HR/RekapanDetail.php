<?php

namespace App\Livewire\HR;

use Livewire\Component;
use App\Models\User;
use App\Models\Outsourcing;
use App\Enums\UserRole;
use App\Enums\Status;
use App\Enums\Validasi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RekapanDetail extends Component
{
    public ?int    $vendorId   = null;
    public ?string $bulan      = null;

    public array  $users   = [];
    public        $vendors = [];
    public bool   $sudahFilter = false;
    public array  $loadedRekapIds = [];

    public ?int    $tahun               = null;
    public ?int    $bulanAngka          = null;
    public int     $jumlahHariDalamBulan = 31;
    public ?string $periodeAwal         = null;
    public ?string $periodeAkhir        = null;
    public string  $labelPeriode        = '';

    public int $totalH  = 0;
    public int $totalA  = 0;
    public int $totalSI = 0;
    public int $totalL  = 0;

    public string $statusRekap  = 'Menunggu Persetujuan';
    public int    $perPage      = 10;
    public int    $halamanAktif = 1;
    public int    $totalKaryawan = 0;

    protected array $mappingKode = [
        'hadir'     => 'H',
        'sakit'     => 'S',
        'izin'      => 'I',
        'mankir'    => 'A',
        'cuti'      => 'L',
        'terlambat' => 'H',
    ];

    public function mount(): void
    {
        $this->bulan   = now()->format('Y-m');
        $this->vendors = Outsourcing::all();
        $this->tampilkanRekap();
    }

    public function tampilkanRekap(): void
    {
        $this->validate(
            ['bulan' => 'required'],
            ['bulan.required' => 'Pilih bulan terlebih dahulu.']
        );

        $carbonBulan             = Carbon::createFromFormat('Y-m', $this->bulan);
        $this->tahun             = $carbonBulan->year;

        // reset total page saat filter baru
        $this->halamanAktif      = 1;
        $this->bulanAngka        = $carbonBulan->month;

        $awal                    = $carbonBulan->copy()->subMonth()->setDay(25);
        $akhir                   = $carbonBulan->copy()->setDay(24);
        $this->periodeAwal       = $awal->format('Y-m-d');
        $this->periodeAkhir      = $akhir->format('Y-m-d');
        $this->labelPeriode      = $awal->translatedFormat('d M Y') . ' – ' . $akhir->translatedFormat('d M Y');
        $this->jumlahHariDalamBulan = (int) $awal->diffInDays($akhir) + 1;

        $this->halamanAktif = 1;
        $this->loadData();
    }

    public function loadData(): void
    {
        $query = User::with(['outsourcing', 'departemen'])
            ->where('role', UserRole::Karyawan->value)
            ->where('status', Status::Active->value);

        if ($this->vendorId) {
            $query->where('outsourcing_id', $this->vendorId);
        }

        $this->totalKaryawan = $query->count();

        $rawUsers = $query
            ->skip(($this->halamanAktif - 1) * $this->perPage)
            ->take($this->perPage)
            ->get();

        $formatted      = [];
        $this->totalH   = 0;
        $this->totalA   = 0;
        $this->totalSI  = 0;
        $this->totalL   = 0;

        $awalCarbon = Carbon::parse($this->periodeAwal);

        $this->loadedRekapIds = [];

        foreach ($rawUsers as $user) {
            $formatted[] = $this->processKehadiranData($user, $awalCarbon);
        }

        $this->users       = $formatted;
        $this->sudahFilter = true;

        $this->hitungStatusRekap();
    }

    /**
     * Memproses data kehadiran untuk satu karyawan dan menghitung rekapannya.
     * Jika tidak ada rekap_kehadiran untuk periode ini milik karyawan bersangkutan,
     * kembalikan flag belum_ada_data = true agar view menampilkan "Masih menunggu data".
     */
    private function processKehadiranData(User $user, Carbon $awalCarbon): array
    {
        // Cari id rekapan yang:
        // 1. tanggal_validasinya berada di periode yang dipilih
        // 2. ada record kehadiran untuk user ini (via karyawan_jadwal)
        $rekapIds = DB::table('rekap_kehadiran')
            ->select('rekap_kehadiran.id_rekapan')
            ->join('kehadiran', 'kehadiran.rekapan_kehadiran_id', '=', 'rekap_kehadiran.id_rekapan')
            ->join('jadwal', 'kehadiran.jadwal_id', '=', 'jadwal.id_jadwal')
            ->join('karyawan_jadwal', 'jadwal.id_jadwal', '=', 'karyawan_jadwal.jadwal_id')
            ->where('karyawan_jadwal.user_id', $user->id_user)
            ->whereBetween('rekap_kehadiran.tanggal_validasi', [$this->periodeAwal, $this->periodeAkhir])
            ->pluck('rekap_kehadiran.id_rekapan')
            ->unique();

        // Jika belum ada rekapan tersimpan untuk karyawan ini pada periode ini,
        // tandai sebagai belum ada data (mengikuti data dashboard admin outsourcing).
        if ($rekapIds->isEmpty()) {
            return [
                'user'          => $user,
                'belum_ada_data'=> true,
                'kehadiran_map' => [],
                'summary'       => [
                    'h'  => 0,
                    'a'  => 0,
                    'si' => 0,
                    'l'  => 0,
                ],
            ];
        }

        foreach ($rekapIds as $id) {
            if (!in_array($id, $this->loadedRekapIds)) {
                $this->loadedRekapIds[] = $id;
            }
        }

        $kehadiranData = DB::table('kehadiran')
            ->join('jadwal', 'kehadiran.jadwal_id', '=', 'jadwal.id_jadwal')
            ->join('karyawan_jadwal', 'jadwal.id_jadwal', '=', 'karyawan_jadwal.jadwal_id')
            ->join('tipe_kehadiran', 'kehadiran.tipe_kehadiran_id', '=', 'tipe_kehadiran.id_tipe_kehadiran')
            ->join('rekap_kehadiran', 'kehadiran.rekapan_kehadiran_id', '=', 'rekap_kehadiran.id_rekapan')
            ->where('karyawan_jadwal.user_id', $user->id_user)
            ->whereIn('kehadiran.rekapan_kehadiran_id', $rekapIds)
            ->select('kehadiran.tanggal', 'tipe_kehadiran.status_kehadiran')
            ->get();

        $kehadiranMap = [];
        foreach ($kehadiranData as $kehadiran) {
            $tgl  = Carbon::parse($kehadiran->tanggal);
            $urut = (int) $awalCarbon->diffInDays($tgl) + 1;
            $kehadiranMap[$urut] = $this->mappingKode[$kehadiran->status_kehadiran] ?? '-';
        }

        $hadir     = collect($kehadiranMap)->filter(fn($v) => $v === 'H')->count();
        $mangkir   = collect($kehadiranMap)->filter(fn($v) => $v === 'A')->count();
        $sakitIzin = collect($kehadiranMap)->filter(fn($v) => in_array($v, ['S', 'I']))->count();
        $cuti      = collect($kehadiranMap)->filter(fn($v) => $v === 'L')->count();

        $this->totalH  += $hadir;
        $this->totalA  += $mangkir;
        $this->totalSI += $sakitIzin;
        $this->totalL  += $cuti;

        return [
            'user'          => $user,
            'belum_ada_data'=> false,
            'kehadiran_map' => $kehadiranMap,
            'summary'       => [
                'h'  => $hadir,
                'a'  => $mangkir,
                'si' => $sakitIzin,
                'l'  => $cuti,
            ],
        ];
    }

    public function pilihVendor(?int $id): void
    {
        $this->vendorId   = $id;
        $this->halamanAktif = 1;

        // Jika rekap sudah pernah ditampilkan, langsung reload dengan filter baru
        if ($this->sudahFilter) {
            $this->loadData();
        }
    }

    public function gantiHalaman(int $halaman): void
    {
        $this->halamanAktif = $halaman;
        $this->loadData();
    }

    public function resetFilter(): void
    {
        $this->vendorId          = null;
        $this->bulan             = now()->format('Y-m');
        $this->users             = [];
        $this->sudahFilter       = false;
        $this->halamanAktif      = 1;
        $this->totalH            = 0;
        $this->totalA            = 0;
        $this->totalSI           = 0;
        $this->totalL            = 0;
        $this->periodeAwal       = null;
        $this->periodeAkhir      = null;
        $this->labelPeriode      = '';
        $this->loadedRekapIds    = [];
    }

    public function hitungStatusRekap(): void
    {
        if (empty($this->loadedRekapIds)) {
            $this->statusRekap = 'Belum Ada Data';
            return;
        }

        $statuses = DB::table('rekap_kehadiran')
            ->whereIn('id_rekapan', $this->loadedRekapIds)
            ->pluck('status_validasi')
            ->unique()
            ->toArray();

        if (in_array(Validasi::Invalid->value, $statuses)) {
            $this->statusRekap = 'Ditolak';
        } elseif (in_array(Validasi::Pending->value, $statuses) || in_array(null, $statuses, true)) {
            $this->statusRekap = 'Menunggu Persetujuan';
        } else {
            $this->statusRekap = 'Disetujui';
        }
    }

    public function setujuiRekap(): void
    {
        if (empty($this->loadedRekapIds)) {
            session()->flash('error', 'Tidak ada data untuk disetujui.');
            return;
        }

        DB::table('rekap_kehadiran')
            ->whereIn('id_rekapan', $this->loadedRekapIds)
            ->update([
                'status_validasi' => Validasi::Valid->value,
                'pevalidasi' => auth()->id() ?? 1,
                'updated_at' => now()
            ]);

        $this->hitungStatusRekap();
        session()->flash('success', 'Rekap berhasil disetujui.');
    }

    public function tolakRekap(): void
    {
        if (empty($this->loadedRekapIds)) {
            session()->flash('error', 'Tidak ada data untuk ditolak.');
            return;
        }

        DB::table('rekap_kehadiran')
            ->whereIn('id_rekapan', $this->loadedRekapIds)
            ->update([
                'status_validasi' => Validasi::Invalid->value,
                'pevalidasi' => auth()->id() ?? 1,
                'updated_at' => now()
            ]);

        $this->hitungStatusRekap();
        session()->flash('success', 'Rekap telah ditolak.');
    }

    public function render()
    {
        return view('livewire.hr.rekapan-detail');
    }
}
