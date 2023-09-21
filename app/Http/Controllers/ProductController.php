<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('product.index',compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        $products = new Product;
        $products->name=$request->name;
        $products->price=$request->price;
        $products->stock=$request->stock;
        $products->description=$request->description;
        $products->save();
        return redirect()->route('product.index');
    }
    public function show(string $id)
    {

    }
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $product = Product::find();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->description=$request->description;
        $product->update();

        return redirect()->route('product.index');

    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
