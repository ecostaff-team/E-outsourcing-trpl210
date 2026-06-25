<?php

namespace App\Http\Controllers;

use App\Models\Lembur;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HrDashboardController extends Controller
{
    public function exportLembur(Request $request)
    {
        $query = Lembur::with(['karyawan.departemen', 'karyawan.outsourcing']);

        if ($request->filled('start_date')) {
            $query->whereDate('mulai_lembur', '>=', $request->start_date);
        }

        if ($request->filled('end_date')) {
            $query->whereDate('mulai_lembur', '<=', $request->end_date);
        }

        $lemburs = $query->get();

        $filename = "rekap_lembur_" . date('Ymd_His') . ".csv";

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = [
            'No', 
            'NIP', 
            'Nama Karyawan', 
            'Departemen Vendor', 
            'Mulai Lembur', 
            'Selesai Lembur', 
            'Durasi (menit)', 
            'Status'
        ];

        $callback = function() use($lemburs, $columns) {
            $file = fopen('php://output', 'w');
            
            // Tambahkan BOM untuk dukungan UTF-8 di Excel
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
            
            fputcsv($file, $columns);

            $no = 1;
            foreach ($lemburs as $lembur) {
                // Hitung durasi
                $durasi = 0;
                if ($lembur->mulai_lembur && $lembur->selesai_lembur) {
                    $mulai = Carbon::parse($lembur->mulai_lembur);
                    $selesai = Carbon::parse($lembur->selesai_lembur);
                    $durasi = $mulai->diffInMinutes($selesai);
                }

                $departemenVendor = ($lembur->karyawan->departemen->nama_departemen ?? '-') . ' / ' . ($lembur->karyawan->outsourcing->nama_outsourcing ?? '-');
                
                $row = [
                    $no++,
                    $lembur->karyawan->nip ?? '-',
                    $lembur->karyawan->nama_lengkap ?? '-',
                    $departemenVendor,
                    $lembur->mulai_lembur ? Carbon::parse($lembur->mulai_lembur)->format('d M Y H:i') : '-',
                    $lembur->selesai_lembur ? Carbon::parse($lembur->selesai_lembur)->format('d M Y H:i') : '-',
                    $durasi,
                    $lembur->status_validasi ?? $lembur->status
                ];

                fputcsv($file, $row);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
