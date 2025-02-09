@extends('Layout.master')
@section('content')


    <!-- Cart Start -->
    
    <div class="cart_section">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cart_container">
                 
                     <div class="cart_title">Shopping Cart
                        @if(Session::has('cart_size'))
                        <small> ({{ Session::get('cart_size') }} item in your cart) </small>
                        @endif
                    </div>
            @if(Session::has('cart'))
                @foreach(Session::get('cart') as $product)
                     <div class="cart_items">
                         <ul class="cart_list">
                             <li class="cart_item clearfix">
                                 <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                         <div class="cart_item_title">Image</div>
                                         <div class="cart_item_image"><img src="{{ asset('img/' . $product['image']) }}" alt="" style="max-width: 100px; max-height: 50px;"></div>
                                     </div>
                                     <div class="cart_item_name cart_info_col">
                                         <div class="cart_item_title">Name</div>
                                         <div class="cart_item_text">{{ $product['name'] }}</div>
                                     </div>
                                     <div class="cart_item_color cart_info_col">
                                         <div class="cart_item_title">Type</div>
                                         <div class="cart_item_text"><span style="background-color:#999999;"></span>{{ $product['type'] }}</div>
                                     </div>
                                     <div class="cart_item_quantity cart_info_col">
                                         <div class="cart_item_title">Quantity</div>
                                         <div class="cart_item_text">{{ $product['quantity'] }}</div>
                                     </div>
                                     <div class="cart_item_price cart_info_col">
                                         <div class="cart_item_title">Price</div>
                                         <div class="cart_item_text">{{ $product['price'] }}</div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                @endforeach
            @endif
                     <div class="order_total">
                         <div class="order_total_content text-md-right">
                             <div class="order_total_title">Order Total:</div>
                             @if(Session::has('totalPrice'))
                             <div class="order_total_amount">{{ Session::get('totalPrice') }}</div>
                             @endif
                         </div>
                     </div>
                     <div class="cart_buttons" style="display: flex; justify-content: flex-end; margin-top: 20px;"> 
                        <form action="{{ route('checkout') }}" method="GET">
                        <button type="submit" class="btn custom-btn">Checkout</button> 
                        </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

<!-- Cart End -->

@endsection