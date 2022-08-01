<?php

namespace App\View\Components\Backend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\Component;

class sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();
        $products= Product::all();
        return view('components.backend.sidebar',compact('categories','products'));
    }
}
