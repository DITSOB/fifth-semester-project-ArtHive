@extends('Layout.master')
@section('content')


    <!-- Cart Start -->
    
 <div class="container-fluid pt-5">
        <div class="container">
        <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2" style="padding: 0;">
        <h4>Your Cart</h4>
        @if($errors)
            @foreach($errors->all() as $error)
                <h2 style="justify-content: center; align-items: center; ">{{ $error }}</h2>
            @endforeach
        @endif
        </div>
        <table class="pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            @if(Session::has('cart'))
                @foreach(Session::get('cart') as $product)
                        <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{ asset('img/' . $product['image']); }}" style="object-fit: cover;">
                                <div>
                                    <p>{{ $product['name'] }}</p>
                                    <small><span>$</span>{{ $product['price'] }}</small>
                                    <br>
                                    <form action="{{ route('remove_from_cart'); }}" method="POST"> 
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product['id'] }}">
                                        <input type="submit"  class="remove-btn" value="remove">
                                    </form>
                                </div>
                            </div>
                        </td>

                        <td>
                            <p  style="padding-left: 20px;">{{ $product['quantity'] }}</p>
                        </td>

                        <td>
                            <span class="product-price">{{ $product['price'] }}</span>
                        </td>
                        </tr>
                @endforeach
            @endif

        </table>


        <div class="cart-total">
            <table>
      
                <tr>
                    <td>Total</td>
                    @if(Session::has('totalPrice') && Session::get('cart')!=NULL)
                        <td>RS {{Session::get('totalPrice')}}</td>
                    @else
                        <td>RS 0</td>
                    @endif

                </tr>
           
            </table>
        </div>
        

        <div class="checkout-container">
       
            <form action="" method="GET">
                <input type="submit" class="btn checkout-btn" value="Checkout">
            </form>
          
        
        </div>





        </section>
        </div>
    </div>

<!-- Cart End -->

@endsection