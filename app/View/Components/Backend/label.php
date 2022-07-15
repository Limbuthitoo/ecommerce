<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class label extends Component
{
    protected $for;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($for)
    {
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $for = $this->for;
        return view('components.backend.label',compact('for'));
    }
}
