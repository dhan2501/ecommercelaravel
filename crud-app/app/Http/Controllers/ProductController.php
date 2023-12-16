<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::get();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        // dd($request->all()); //for get input field data details.
        $request->validate([
            'name'=>'required',
            'description' =>'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        //uploading Image
        $imageName =  time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        // dd($imageName); save data

        //Create object for product

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        // return back();
        return back()->withSuccess('Product Created !!!!');

    }

    public function edit($id){

        // dd($id);
        $product = Product::where('id', $id)->first();
        return view('products.edit',['product' =>$product]);

    }

    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'description' =>'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $product = Product::where('id',$id)->first();
        //uploading Image
        if(isset($request->image)){
            $imageName =  time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);            
            $product->image = $imageName;
        }
        // dd($imageName); save data

        //Create object for product

        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        // return back();
        return back()->withSuccess('Product Updated !!!!');
    }

    public function delete($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted !!!!');
    }
    public function show($id){
        $product = Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }
}
