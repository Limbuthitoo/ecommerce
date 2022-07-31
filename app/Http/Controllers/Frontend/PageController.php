<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ads;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        //Frontend Logo
        $company = Company::first();

        //category menu
        $categories = Category::all();

        //products
        $fruitVegetable = Category::where('slug','fruits-vegetables')->first();
        $fruitsVegetables = Product::where('category_id',$fruitVegetable->id)->get();

        //ads
        $ads=ads::all();
        return view('frontend.pages.home',compact('ads','company','categories','fruitsVegetables','fruitVegetable'));
    }
}
