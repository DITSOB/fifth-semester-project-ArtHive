@extends('Layout.master')
@section('content')

    @foreach($products as $product)

        <div class="card-container">
            <div class="card">
                <img src="{{ asset('img/'.$product->image); }}">
                <div class="card-content">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description}}</p>
                    @if($product->sale_price!=NULL)
                        <!-- <h4 style="text-decoration: line-through; color:cadetblue;">${{$product->price}}</h4> -->
                        <h4 style="text-decoration: line-through; color:cadetblue;">${{$product->price}}</h4>
                        <h3>${{$product->sale_price}}</h3>
                    @else
                        <h3>${{$product->price}}</h3>
                    @endif
                    <form action="{{route ('add_to_cart') }}"method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id}}">
                        <input type="hidden" name="name" value="{{ $product->name}}">
                        <input type="hidden" name="price" value="{{ $product->price}}">
                        <input type="hidden" name="sale_price" value="{{ $product->sale_price}}">
                        <input type="hidden" name="image" value="{{ $product->image}}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="submit" value="Add To Cart" class="btn">
                </div>
            </div>
        </div>


    @endforeach

@endsection
