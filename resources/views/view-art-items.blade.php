@extends('Layout.master')
@section('content')


    <!-- Cart Start -->
    
 <div class="container-fluid pt-5">
        <div class="container">
        <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2" style="padding: 0;">
        @if($errors)
            @foreach($errors->all() as $error)
                <h2 style="justify-content: center; align-items: center; ">{{ $error }}</h2>
            @endforeach
        @endif
        </div>
        <table class="pt-5">
            <tr>
                <th>Product</th>
                <th>Artist</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
                @foreach($products as $product)
                        <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{ asset('img/' . $product['image']); }}" style="object-fit: cover;">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <p>{{ $product->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="prouct-price">{{ $product->artist }}</span>
                        </td>
                        <td>
                            <p  style="padding-left: 20px;">{{ $product->quantity }}</p>
                        </td>

                        <td>
                            <span class="product-price" style="display: flex; justify-content: flex-start;">{{ $product->price }}</span>
                        </td>
                        <td style="display: flex; justify-content: center; padding-top: 30px; gap: 5px;">
                            <form action="{{ route('edit', $product->id) }}">
                                <button class="btn-log btn-lg btn-success" style="width: 50px; height: 50px; display: flex; justify-content: center;"><i class="bi bi-pencil-square"></i></button>
                            </form>
                            <form action="{{ route('delete', $product->id) }}">
                                <button class="btn-log btn-lg btn-danger" style="width: 50px; height: 50px; display: flex; justify-content: center;"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        </tr>
                @endforeach
        </table>



        </section>
        </div>
    </div>

<!-- Cart End -->

@endsection