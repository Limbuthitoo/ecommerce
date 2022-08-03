<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ads;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function home()
    {
        //Frontend Logo
        $company = Company::first();

        //category menu
        $menus = Category::all();

        //products fruit and vegetables
        $fruitVegetable = Category::where('slug','fruits-vegetables')->first();
        $fruitsVegetables = Product::where('category_id',$fruitVegetable->id)->get();

        //products Dairy breads and eggs
        $dairyBreadEgg = Category::where('slug','dairy-breads-eggs')->first();
        $dairyBreadsEggs = Product::where('category_id',$dairyBreadEgg->id)->get();

        //products Dairy breads and eggs
        $personalCare = Category::where('slug','personal-care')->first();
        $personalCares = Product::where('category_id',$personalCare->id)->get();

        //ads
        $ads=ads::all();

        return view('frontend.pages.home',compact('ads','company','menus','fruitsVegetables','fruitVegetable','dairyBreadEgg','dairyBreadsEggs','personalCare','personalCares'));
    }

    public function productCategory($id)
    {
        //Menu from category
        $menus=Category::all();

        //Product list by category
        $categories = Category::find($id);
        $products =Product::where('category_id',$id)->get();
        return view('frontend.pages.product_category',compact('categories','products','menus'));
    }

    public function productDetail($id)
    {
        //category menu
        $menus = Category::all();

        //Product Details
        $product = Product::find($id);
        return view('frontend.pages.product_detail',compact('product','menus'));
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        if (isset($cart[$id])) {
            $cart($id)['quantity']++;
        } else{
            $cart[$id] =[
                "name" => $product->name,
                "quantity"=>1,
                "price" => $product->selling_price,
                "image" => $product->image
            ];
            session()->put('cart',$cart);
            return redirect()->back();
        }


        // $cart = new Cart();
        // $cart -> product_id = $request->product_id;
        // $cart -> quantity = $request->quantity;
        // $cart -> amount = $request->selling_price * $request->quantity;
        // $cart -> user_id = Auth::user()->id;
        // $cart->save();
        // return redirect()->back();
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"]=$request->quantity;
            session()->put('cart', $cart);

        }
    }

    /** Remove Cart Product **/
    public function remove(Request $request)
    {
        if($request->id){
            $cart=session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }

        }
    }
}
