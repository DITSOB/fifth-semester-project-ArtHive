@extends('Layout.master')
@section('content')

<div class="card-body">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div>
                <span>{{ $error }}</span>
            </div>
        @endforeach
    @endif

    <div class="card-container">
        @foreach($products as $product)
        <div class="card">
            <div class="imgBox">
                <img src="{{ asset('img/' . $product->image) }}" alt="">
                <ul class="action">
                    <li>
                        <a href="{{ route('single_product', $product->id) }}"><i class="bi bi-eye-fill"></i></a>
                        <span>View Details</span>
                    </li>
                    <li>
                        <form id="form-{{ $product->id }}" action="{{ route('add_to_cart', $product->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                            <input type="hidden" name="type" value="{{ $product->type }}">
                            <input type="hidden" name="image" value="{{ $product->image }}">
                            <input type="hidden" name="quantity" value="1">
                            <a onclick="document.getElementById('form-{{ $product->id }}').submit();"><i class="bi bi-cart-fill"></i></a>
                            <span>Add to Cart</span>
                        </form>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-heart-fill"></i></a>
                        <span>Add to Wishlist</span>
                    </li>
                </ul>
            </div>
            <div class="card-content">
                <div class="productName">
                    <h2>{{ $product->name }}</h2>
                </div>
                <div class="price_rating">
                    @if($product->sale_price)
                        <h4 style="text-decoration: line-through; color: red;">${{ $product->price }}</h4>
                        <h3>${{ $product->sale_price }}</h3>
                    @else
                        <h3>${{ $product->price }}</h3>
                    @endif
                    <div class="rating">
                        <i class="bi bi-star-fill" style="color:rgb(250, 212, 45);"></i>
                        <h7>7.3</h7>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
