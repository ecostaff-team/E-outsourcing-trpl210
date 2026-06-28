<?php

namespace App\Livewire\SuperAdmin;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PrivilegeMonitor extends Component
{
    public $initialGrantsHash = null;

    public function mount()
    {
        $this->updateGrantsHash();
    }

    public function checkPrivileges()
    {
        try {
            $currentGrantsHash = $this->getCurrentGrantsHash();

            if ($this->initialGrantsHash === null) {
                $this->initialGrantsHash = $currentGrantsHash;
                return;
            }

            if ($this->initialGrantsHash !== $currentGrantsHash) {
                $this->initialGrantsHash = $currentGrantsHash;
                $this->dispatch('privilege-revoked');
            }
        } catch (\Exception $e) {
            $this->dispatch('privilege-revoked');
        }
    }

    private function updateGrantsHash()
    {
        try {
            $this->initialGrantsHash = $this->getCurrentGrantsHash();
        } catch (\Exception $e) {
            $this->initialGrantsHash = null;
        }
    }

    private function getCurrentGrantsHash()
    {
        $grants = DB::select('SHOW GRANTS FOR CURRENT_USER');
        return md5(json_encode($grants));
    }

    public function render()
    {
        return view('livewire.super-admin.privilege-monitor');
    }
}
