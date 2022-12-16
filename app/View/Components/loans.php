<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loans extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pass;
    public $title;
    public function __construct($pass = '', $title = null)
    {
        $this->pass = $pass;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.loans');
    }
}
