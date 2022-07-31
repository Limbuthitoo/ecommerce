<?php

namespace App\View\Components\frontend;

use Illuminate\View\Component;

class product extends Component
{

    protected $product;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $product= $this->product;
        return view('components.frontend.product', compact('product'));
    }
}
