<?php

namespace App\View\Components\Backend;

use Illuminate\View\Component;

class Input extends Component
{
    protected $name;
    protected $type;
    protected $placeholder;
    protected $value;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$name,$placeholder,$value)
    {
        $this->name =$name;
        $this->type =$type;
        $this->placeholder =$placeholder;
        $this->value =$value;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $type = $this->type;
        $name = $this->name;
        $placeholder = $this->placeholder;
        $value = $this->value;


        return view('components.backend.input',compact('type','name','placeholder','value'));
    }
}
