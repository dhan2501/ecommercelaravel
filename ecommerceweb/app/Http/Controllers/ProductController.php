<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
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
    function addTocart(request $req){
        // return 'Hello';
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
