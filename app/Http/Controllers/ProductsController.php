<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function addProduct(Request $request){
        $product = new Product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->amount=$request->amount;
        $product->save();
        return view('pages.addProducts');

    }

    Public function getProducts(){
        $products=Product::all();

        return view('pages.getProducts',compact('products'));
    }

    public function update($id){
        $product=Product::where('id',$id)->first();
        return view('pages.updateProduct', compact('product'));
    }

    public function UpdateRecord(Request $request){
        $id=$request->id;
        $product=Product::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->amount=$request->amount;
        $product->save();
        return redirect ()->back();
    }
}
