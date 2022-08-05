<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Adminlte extends Component
{
    public $title, $style;
    /**
     * Create the component instance.
     *
     *
     *
     * @return void
     */
    public function __construct($title, $style)
    {
        $this->title = $title;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.adminlte');
    }
}
