<?php

namespace App\View\Components;

use App\Models\Company;
use Illuminate\View\Component;

class GuestLayout extends Component
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
        $company=Company::all();
        return view('components.guest-layout',compact('company'));
    }
}
