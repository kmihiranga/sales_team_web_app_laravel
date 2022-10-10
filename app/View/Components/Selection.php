<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Selection extends Component
{
    /**
     * selection id
     * 
     * @var string
     */
    public $id;

    /**
     * placeholder
     * 
     * @var string
     */
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $placeholder)
    {
        $this->id = $id;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.selection');
    }
}
