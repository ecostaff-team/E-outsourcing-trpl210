<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $rows;
    public $columns;
    public $actions;

    public function __construct($data = [], $columns = [], $actions = null)
    {
        $this->rows = $data;
        $this->columns = $columns;
        $this->actions = $actions;
    }

    public function render()
    {
        return view('components.table');
    }
}
