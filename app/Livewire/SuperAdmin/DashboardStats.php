<?php

namespace App\Livewire\SuperAdmin;

use App\Enums\UserRole;
use App\Models\User;
use Livewire\Component;

/**
 * Class DashboardStats
 *
 * Livewire component untuk menampilkan statistik jumlah pengguna
 * pada dashboard Super Admin.
 */
class DashboardStats extends Component
{
    /**
     * selalu stay update ketika ada perubahan data pengguna
     */
    protected $listeners = ['userAdded' => '$refresh'];

    /* melakukan query count */
    /**
     * Mengambil total Admin Outsourcing
     */
    public function getTotalAdminVendorProperty(): int
    {
        return User::query()->where('role', UserRole::AdminVendor->value)->count();
    }

    /**
     * Mengambil total HR
     */
    public function getTotalHrProperty(): int
    {
        return User::query()->where('role', UserRole::Hr->value)->count();
    }

    /**
     * Mengambil total Kepala Departemen
     */
    public function getTotalKepalaDepartemenProperty(): int
    {
        return User::query()->where('role', UserRole::KepalaDepartemen->value)->count();
    }

    /**
     * Mengambil total dari ketiga role di atas
     */
    public function getTotalPenggunaProperty(): int
    {
        return $this->totalAdminVendor + $this->totalHr + $this->totalKepalaDepartemen;
    }
    /* query count selesai di sini */

    /**
     * Render komponen mengembalikan view dengan data statistik pengguna ke component CardStats
     */
    public function render()
    {
        return view('livewire.super-admin.dashboard-stats', [
            'totalAdminVendor'      => $this->totalAdminVendor,
            'totalHr'               => $this->totalHr,
            'totalKepalaDepartemen' => $this->totalKepalaDepartemen,
            'totalPengguna'         => $this->totalPengguna,
        ]);
    }
}
