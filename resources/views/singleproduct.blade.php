@extends('Layout.master')
@section('content')

<div class="container my-5">
        <div class="row">
            <div class="col-md-5">
                <div class="main-img">
                    <img class="img-fluid" src="{{ asset('img/' . $product->image); }}" alt="{{ $product->image }}">
                    <!-- <div class="row my-3 previews">
                        <div class="col-md-3">
                            <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/40/model-858754_960_720.jpg" alt="Sale">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/38/model-858749_960_720.jpg" alt="Sale">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/39/model-858751_960_720.jpg" alt="Sale">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="https://cdn.pixabay.com/photo/2015/07/24/18/37/model-858748_960_720.jpg" alt="Sale">
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-description px-2">
                    <div class="category text-bold">
                        Category: {{ $product->type }}
                    </div>
                    <div class="product-title text-bold my-3">
                        {{ $product->name }}
                    </div>
                    <div class="product-title my-4">
                        <span style="color: rgb(119, 118, 118)">Artist: {{ $product->artist }}</span>
                    </div>


                    <div class="price-area my-4">
                        @if($product->sale_price!=NULL)
                            <p class="old-price mb-1"><del>{{ $product->price }}</del></p>
                            <p class="new-price text-bold mb-1">${{ $product->sale_price }}</p>
                        @else
                            <p class="old-price mb-1"><del>{{ $product->price }}</del></p>
                        @endif
                        <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>
                    </div>


                    <div class="buttons d-flex my-5" style="justify-content: space-between;">
                        <div class="block">
                            <a href="#" class="btn custom-btn"><i class="bi bi-heart-fill"></i>&nbsp;Add to Wishlist</a>
                        </div>
                        <div class="block">
                            <button class="shadow btn custom-btn"><i class="bi bi-cart-fill"></i>&nbsp;Add to cart</button>
                        </div>
                    </div>




                </div>

                <div class="product-details my-4">
                    <p class="details-title text-color mb-1">Product Details</p>
                    <p class="description">{{ $product->description }}</p>
                </div>
              
                         <div class="row questions bg-light p-3">
                    <div class="col-md-1 icon">
                        <i class="bi bi-question" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-md-11 text">
                        Have a question about our products at E-Store? Feel free to contact our representatives via live chat or email.
                    </div>
                </div>

                <div class="delivery my-4">
                    <p class="font-weight-bold mb-0"><span><i class="bi bi-truck"></i></span> <b>Delivery done in 3 days from date of purchase</b> </p>
                    <p class="text-secondary">Order now to get this product delivery</p>
                </div>             
            </div>
        </div>
    </div>

</div>

@endsection