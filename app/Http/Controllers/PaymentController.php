<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
public function payment(Request $request)
{
    
    if (!$request->session()->has('cart') || empty($request->session()->get('cart'))) {
        return redirect()->back()->with('error', 'Your cart is empty!');
    }


    if (!$request->session()->has('totalPrice')) {
        return redirect()->back()->with('error', 'Total price is missing!');
    }

    
    $order = new Order();
    $order->name = $request->name;
    $order->email = $request->email;
    $order->city = $request->city;
    $order->address = $request->address;
    $order->phone = $request->phone;
    $order->cost = $request->session()->get('totalPrice');
    $order->status = "not paid";
    $order->date = date("Y-m-d");

    if (!$order->save()) {
        return redirect()->back()->with('error', 'Failed to create order!');
    }

 
    $cart = $request->session()->get('cart');

    
    $orderItems = [];

    foreach ($cart as $c) {
        $orderItem = new Order_item();
        $orderItem->order_id = $order->id; // Ensure order exists before using order_id
        $orderItem->product_id = $c['id'];
        $orderItem->product_name = $c['name'];
        $orderItem->product_price = $c['price'];
        $orderItem->product_image = $c['image'];
        $orderItem->product_quantity = $c['quantity'];
        $orderItem->order_date = date("Y-m-d");
        $orderItem->save();

        // Add to array
        $orderItems[] = $orderItem;
    }

    
    $data = [
        'order' => $order,
        'orderitems' => $orderItems
    ];

    

    return view('payment', compact('data'));
}

public function processPayment(Request $request)
{
    $order = Order::latest()->first(); 

    if (!$order) {
        return redirect()->back()->with('error', 'Order not found!');
    }

    $paymentMethod = $request->payment_method;

    if ($paymentMethod == 'khalti') {
        return view('khalti-payment', compact('order'));
    } elseif ($paymentMethod == 'esewa') {
        return view('esewa-payment', compact('order'));
    } else {
        // Mark order as Cash on Delivery
        $order->status = "Cash on Delivery";
        $order->save();
        return redirect()->route('paymentSuccess')->with('success', 'Order placed successfully! Pay on delivery.');
    }
}

public function confirmPayment(Request $request, $order_id, $method)
{
    $order = Order::find($order_id);

    if (!$order) {
        return redirect('/')->with('error', 'Order not found!');
    }

    $order->status = "Paid via " . ucfirst($method);
    $order->save();

}


}