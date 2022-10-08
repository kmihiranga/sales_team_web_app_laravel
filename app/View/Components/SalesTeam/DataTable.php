<?php

namespace App\View\Components\SalesTeam;

use Illuminate\View\Component;

class DataTable extends Component
{
    /**
     * sales team list
     * @var Collection
     */
    public $salesTeams;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($salesTeams)
    {
        $this->salesTeams = $salesTeams;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sales-team.data-table');
    }
}
