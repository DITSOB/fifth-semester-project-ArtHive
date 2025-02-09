<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function showArtItems(){
        $products = Product::all();
        return view('view-art-items', compact('products'));
    }

    public function showAuctionItems(){

    }
}
