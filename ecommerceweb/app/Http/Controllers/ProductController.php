<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
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

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function cartList(){
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')->join('products','cart.product_id','products.id')->select('products.*','cart.id as cart_id')->where('cart.user_id',$userId)->get();
        return view('userpage/cartlist',['products'=>$data]);
    }
    function removeCart($id){
        Cart::destroy($id);
        return view('userpage/cartlist');
    }
}
