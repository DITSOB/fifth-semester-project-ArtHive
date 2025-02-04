<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    public function about(){
        return view('about');
    }
}
