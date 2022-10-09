<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SecondaryButton extends Component
{
    /**
     * button type
     * 
     * @var string
     */
    public $type;

    /**
     * class name
     * 
     * @var string
     */
    public $className;

    /**
     * button value
     * 
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $className, $value)
    {
        $this->type = $type;
        $this->className = $className;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.secondary-button');
    }
}
