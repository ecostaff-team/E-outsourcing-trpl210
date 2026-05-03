<?php

namespace App\Livewire\SuperAdmin;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Enum;
use Livewire\Component;
use Livewire\WithPagination;

class UserManagement extends Component
{
    use WithPagination;

    // Filter state
    public $activeTab = 'admin_vendor';

    public $search = '';

    // Form state
    public string $nama_lengkap;

    public string $email;

    public string $username; // digunakan sebagai NIP

    public string $nomor_tlp;

    public string $role = '';

    public string $password;

    public string $password_confirmation;

    // Control modal
    public $showModal = false;

    // Refresh pagination saat search berubah
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function updatingActiveTab()
    {
        $this->resetPage();
    }

    public function switchTab( $tab)
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }

    public function openModal()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset([
            'nama_lengkap', 'email', 'username', 'nomor_tlp',
            'role', 'password', 'password_confirmation',
        ]);
        $this->resetValidation();
    }

    public function simpanAkun()
    {
        $this->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username', // NIP
            'nomor_tlp' => 'required|string|max:20',
            'role' => ['required', new Enum(UserRole::class)],
            'password' => 'required|string|min:8|confirmed',
        ], [
            'required' => ':attribute tidak boleh kosong.',
            'unique' => ':attribute sudah terdaftar.',
            'confirmed' => 'Konfirmasi password tidak cocok.',
            'min' => ':attribute minimal :min karakter.',
        ]);

        User::create([
            'nama_lengkap' => $this->nama_lengkap,
            'email' => $this->email,
            'username' => $this->username,
            'nomor_tlp' => $this->nomor_tlp,
            'role' => $this->role,
            'password' => Hash::make($this->password),
            'status' => 'active',
        ]);

        $this->closeModal();
        session()->flash('success', 'Akun berhasil ditambahkan!');

        // Memicu event agar komponen DashboardStats me-refresh datanya
        $this->dispatch('userAdded');

        // Memaksa update data tabel
        $this->resetPage();
    }

    public function render()
    {
        /** @var \Illuminate\Database\Eloquent\Builder $query */
        $query = User::query();

        // Filter berdasarkan tab
        if ($this->activeTab === 'admin_vendor') {
            $query->where('role', UserRole::AdminVendor->value);
        } elseif ($this->activeTab === 'hr') {
            $query->where('role', UserRole::Hr->value);
        } elseif ($this->activeTab === 'kepala_departemen') {
            $query->where('role', UserRole::KepalaDepartemen->value);
        } else {
            // Default: tampilkan semua 3 role tersebut
            $query->whereIn('role', [
                UserRole::AdminVendor->value,
                UserRole::Hr->value,
                UserRole::KepalaDepartemen->value,
            ]);
        }

        // Pencarian
        if (! empty($this->search)) {
            $query->where(function ($q) {
                $q->where('nama_lengkap', 'like', '%'.$this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%')
                    ->orWhere('username', 'like', '%'.$this->search.'%');
            });
        }

        $users = $query->latest('id_user')->paginate(10);

        return view('livewire.super-admin.user-management', [
            'users' => $users,
        ]);
    }
}
