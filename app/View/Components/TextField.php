<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextField extends Component
{
    /**
     * button type
     * 
     * @var string
     */
    public $type;

    /**
     * id
     * 
     * @var string
     */
    public $id;

    /**
     * placeholder value
     * 
     * @var string
     */
    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $id, $placeholder)
    {
        $this->type = $type;
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
        return view('components.text-field');
    }
}
