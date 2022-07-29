<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ads;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //Frontend Logo
        $company = Company::first();

        //category menu
        $categories = Category::all();

        //ads
        $ads=ads::all();
        return view('frontend.pages.home',compact('ads','company','categories'));
    }
}
