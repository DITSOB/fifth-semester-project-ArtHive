<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function gallery(){
        return view('galleries');
    }

    public function art(){
        $products = Product::all();
        return view('art', compact('products'));
    }

    public function single_product(){
        return view('singleproduct');
    }

    public function auction(){
        return view('auction');
    }

    public function cart(Request $request){
        if($request->session()->has('cart')){
            return view('cart');
        }
    }

    public function add_to_cart(Request $request){
        //if session exists or cart has products already
        if($request->session()->has('cart'))
        {   
            $cart=$request->session()->get('cart');

            $product_ids=array_column($cart,'id');

            if(!in_array($request->id,$product_ids)){

            $id=$request->id;
            $name=$request->name;
            $image=$request->image;
            $quantity=$request->quantity;
            ($request->sale_price !=null) ? $price=$request->sale_price : $price=$request->price;

            $product_array = array(
                'id'=>$id,
                'name'=>$name,
                'image'=>$image,
                'quantity'=>$quantity,
                'price'=>$price
            );
            $cart[$request->id]=$product_array;

            $request->session()->put('cart',$cart);
            $cart_items = session()->get('cart');
            $this->calculateTotal($request);
            return view('cart');
        
            }

            else{
            return redirect()->back()->withErrors(['message'=>'product already added to cart']);
            }

        }
     
        //if session doesnt exist or adding new products to the cart
        
        else
        {
            $id=$request->id;
            $name=$request->name;
            $image=$request->image;
            $quantity=$request->quantity;
            ($request->sale_price !=null) ? $price=$request->sale_price : $price=$request->price;

            $product_array = array(
            'id'=>$id,
            'name'=>$name,
            'image'=>$image,
            'quantity'=>$quantity,
            'price'=>$price
            );
            $cart[$request->id]=$product_array;

            $request->session()->put('cart',$cart);
            $this->calculateTotal($request);
            return view('cart');
        }
    }

    public function checkout(){
        return view('checkout');
     }

    public function calculateTotal($request){
        $cart = $request->session()->get('cart');
        $totalPrice = 0;
        foreach($cart as $c){
            $totalPrice = $totalPrice + $c['quantity'] * $c['price'];
        }
        $request -> session()->put('totalPrice',$totalPrice);
    }

    public function remove_from_cart(Request $request){
        $cart = $request->session()->get('cart');
        $id_to_delete = $request->id;
        unset($cart[$id_to_delete]);
        $request->session()->put('cart',$cart);
        return redirect()->back()->withErrors(['message' => 'cart item deleted successfully']);
   }

   public function change_quantity(Request $request){
    $quantity = $request->quantity;
   }

    public function about(){
        return view('about');
    }
}
