<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    public $id;
    public $size;
    public $color;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $size, $color, $title)
    {
        $this->id = $id;
        $this->size = $size;
        $this->color = $color;
        $this->titl = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
