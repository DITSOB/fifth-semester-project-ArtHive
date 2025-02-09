<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showArtItems(){
        $products = Product::all();
        return view('view-art-items', compact('products'));
    }

    public function showAuctionItems(){

    }
    public function addProduct(Request $request){

        $product = new Product();

        $product->name = $request->name;
        $product->artist = $request->artist;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;

        $file = $request->file('image');
        $folder_to_save = public_path('img');
        // dd($request->file('image'));
        $file_name = time() . "_" . $file->getClientOriginalName();
        $file->move($folder_to_save, $file_name);
        
        $product->image = $file_name;

        try{
            $product->save();
            return redirect()->back()->with('success', 'Succesfully Uploaded!');
        } catch(Exception $e){
            return redirect()->back()->withErrors(['message' => 'Invalid Credentials']);
        }
        
    }

    public function delete($id){
        $product_dlt = Product::find($id);
        $product_dlt->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function edit(Request $request, $id){
        $product = Product::find($id);
        return view('edit-art', compact('product'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        $product = Product::find($id);

        $product->name = $request->name;
        $product->artist = $request->artist;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->type = $request->type;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;


        $file = $request->file('image');
        $folder_to_save = public_path('img');
        // dd($request->file('image'));
        $file_name = time() . "_" . $file->getClientOriginalName();
        $file->move($folder_to_save, $file_name);
        
        $product->image = $file_name;

        try{
            $product->update();
            $product = Product::orderby('updated_at', 'desc')->get();
            if(Auth::user()->role === 'user'){
                session()->flash('success', 'Successfully Updated');
                return redirect()->route('profile', compact('product'));
            }else{
                session()->flash('success', 'Successfully Updated');
                return redirect()->route('dashboard', compact('product'));
            }
        } catch(Exception $e){
            $product = Product::orderby('updated_at', 'desc')->get();
            if(Auth::user()->role === 'user'){
                return redirect()->route('profile', compact('product'))->withErrors(['errors', 'Could Not Update']);
            }else{
                return redirect()->route('dashboard', compact('product'))->withErrors(['errors', 'Could Not Update']);
            }
        }
    }

}
