<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
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
