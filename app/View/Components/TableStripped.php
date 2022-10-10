<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableStripped extends Component
{
    /**
     * table column headers
     * 
     * @var array
     */
    public $tableHeaders;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tableHeaders)
    {
        $this->tableHeaders = $tableHeaders;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-stripped');
    }
}
