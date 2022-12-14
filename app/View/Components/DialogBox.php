<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DialogBox extends Component
{
    /**
     * modal id
     * 
     * @var string
     */
    public $id;

    /**
     * modal title
     * 
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dialog-box');
    }
}
