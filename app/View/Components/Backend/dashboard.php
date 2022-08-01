<?php

namespace App\View\Components\Backend;

use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\View\Component;

class dashboard extends Component
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

        $company= Company::first();
        return view('components.backend.dashboard',compact('company'));
    }
}
