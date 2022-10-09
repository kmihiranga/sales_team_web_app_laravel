<?php

namespace App\View\Components\SalesTeam;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * sales team id
     * 
     * @var string
     */
    public $id;

    /**
     * sales team detail
     * 
     * @var Object
     */
    public $salesTeam;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $salesTeam)
    {
        $this->id = $id;
        $this->salesTeam = $salesTeam;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sales-team.modal');
    }
}
