<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LinkButton extends Component
{
    /**
     * class name
     * 
     * @var string
     */
    public $className;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link-button');
    }
}
