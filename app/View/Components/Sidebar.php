<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $menus;

    public function __construct($menus = [])
    {
        $this->menus = $menus;
    }

    public function render()
    {
        return view('components.sidebar');
    }
}
