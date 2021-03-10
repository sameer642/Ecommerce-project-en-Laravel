<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

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
    function cartlist(){
        $userid = Session::get('user')['id'];
        $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userid)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);


    }
    function removecart($id){
        cart::destroy($id);
        return redirect('cartlist');

    }
    function ordernow(){
        $userid = Session::get('user')['id'];
        $total = $products = DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);

    }
    function orderplace(Request $req){
        $userid = Session::get('user')['id'];
        $all = cart::where('user_id',$userid)->get();
        foreach($all as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            cart::where('user_id',$userid)->delete();

        }
         $req->input();
         return redirect('/');
        
        

    }
    function myorders(){
        $userid = Session::get('user')['id'];
        $orders =   DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userid)
        ->get();

        return view('myorders',['orders'=>$orders]);
    }
}
