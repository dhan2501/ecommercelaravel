<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index(){
        // return Product::all();
        $data = Product::all();
        return view('/userpage/product',['products'=>$data]);
    }
    function detail($id){
        // return Product::find($id);
        $data = Product::find($id);
        return view('userpage/detail',['product' =>$data]);

    }
    function search(Request $req){
        // return $req->input();
        $data = Product::where('name', 'like', '%'.$req->input('query'). '%')->get();
        return view('userpage/search',['products' =>$data]);

    }
}
