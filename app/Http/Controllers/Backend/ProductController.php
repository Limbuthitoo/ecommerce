<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $units = Unit::all();
        return view('admin.product.create',compact('categories','units'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->selling_price = round(($request->price)-($request->price*(($request->discount)/100)),2);
        $product->description = $request->description;
        $product->unit_id = $request->unit_id;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time() . "." .$file->getClientOriginalExtension();
            $file -> move("images", $newName);
            $product->image="images/$newName";
        }
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $units = Unit::all();
        $product = Product::find($id);
        return view('admin.product.edit',compact('product','categories','units'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->selling_price = round(($request->price)-($request->price*(($request->discount)/100)),2);
        $product->description = $request->description;
        $product->unit_id = $request->unit_id;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newName = time() . "." .$file->getClientOriginalExtension();
            $file -> move("images", $newName);
            $product->image="images/$newName";
        }
        $product->update();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}
