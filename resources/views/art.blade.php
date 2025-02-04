@extends('Layout.master')
@section('content')

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
                        <h4 style="text-decoration: line-through; color:cadetblue;">${{$products->price}}</h4>
                        <h3>${{$product->sale_price}}</h3>
                    @else
                        <h3>${{$product->price}}</h3>
                    @endif
                    <a href="" class="btn"><i class="bi bi-cart"></i>Add to Cart</a>
                </div>
            </div>
        </div>


    @endforeach

@endsection

@endsection