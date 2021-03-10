<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;


class ProductController extends Controller
{
    //
    function index(){
    	$product =  Product::all();
        return view('product',['products'=>$product]);
    }
    function detail($id){
       $data = Product::find($id);
       return view('detail',['product'=>$data]);


    }
    function search(Request $req){
        
        $data = Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);

    }
    function addToCart(Request $req){
        
        if($req->session()->has('user')){
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');

        }
    }
    static function cartitem(){
        $userid = Session::get('user')['id'];
        return cart::where('user_id',$userid)->count();
    }
}
