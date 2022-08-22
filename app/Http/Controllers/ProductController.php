<?php

namespace App\Http\Controllers;
Use App\Models\Product;
Use App\Models\Cart;
Use App\Models\Order;


use Session;
use Illuminate\Http\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductController extends Controller
{
     public function home(){
          return view('home');
      }
public function list(){
    $data = Product::all();
    
     return view('product',['products'=>$data]);
     
    }

    public function detail($id){
        $data= product::find($id);
       return view('detail',['product'=>$data]);
    }


    public function addToCart(request $req){
    if($req->session()->has('user')){
   
   $cart  = new Cart;
   $cart->user_id=$req->session()->get('user')['id'];
   $cart->product_id=$req->product_id;
   $cart->save();
   return redirect('/');

}else{

    return redirect('/login');
}

}
    
static function cartItem(){

   $userId=FacadesSession::get('user')['id'];
   return Cart::where('user_id',$userId)->count();

}
public function cartlist()
{
    $userId=FacadesSession::get('user')['id'];

   $products = FacadesDB::table('cart')
   ->join('products','cart.product_id','=','products.id')
    ->where('cart.user_id',$userId)
    ->select('products.*','cart.id as cart_id')
    ->get();
    // dd($products);
    return view('cartlist',['products'=>$products]);


}
    public function removeCart($id){

    Cart::destroy($id); 
    return redirect('cartlist');   
    }
    public function orderNow(){
        $userId=FacadesSession::get('user')['id'];

       $total= $products =FacadesDB::table('cart')
        ->join('products','cart.product_id','=','product_id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
         return view('ordernow',['total'=>$total]);
     

}


public function orderPlace(Request $req){
    $userId=FacadesSession::get('user')['id'];
     $allCart=Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart)
    
    {
        $order = new Order;
        $order->product_id=$cart['product_id'];
        $order->product_id=$cart['product_id'];

        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
    
    }
    
     $req->input();
     return redirect('/');


}

public function myOrders(){

        $userId=FacadesSession::get('user')['id'];

     $orders = FacadesDB::table('orders')
        ->join('products','orders.product_id','=','product_id')
         ->where('orders.user_id',$userId)
         ->get();
         return view('myorder',['orders'=>$orders]);
     




}
}
