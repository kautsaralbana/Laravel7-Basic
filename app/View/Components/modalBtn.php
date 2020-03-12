<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modalBtn extends Component
{
    public $class;
    public $dataTarget;
    public $icon;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $dataTarget, $icon, $name)
    {
        $this->class = $class;
        $this->dataTarget = $dataTarget;
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal-btn');
    }
}
