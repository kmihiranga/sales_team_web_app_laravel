<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    /**
     * placeholder
     * 
     * @var string
     */
    public $placeholder;

    /**
     * id
     * 
     * @var string
     */
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($placeholder, $id)
    {
        $this->placeholder = $placeholder;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-area');
    }
}
