@extends('Layout.master')
@section('content')

<div class="card-body">
        <div class="card-container">
            <div class="card">
            @foreach($galleries as $gallery)
                <div class="imgBox">
                    <img src="{{ asset('img/' . $gallery->image); }}" alt="">
                </div>
                <div class="card-content">
                    <div class="productName">
                        <h2>{{ $gallery->name }}</h2>
                    </div>
                    <div class="price_rating">
                        <div class="rating">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h7>{{ $gallery->location }}</h7> 
                        </div>
                        <div class="rating">
                            <i class="bi bi-calendar"></i>
                            <h7>
                                {{ $gallery->start_date }} to 
                                @if($gallery->end_date === '0000-00-00') 
                                    ? 
                                @else
                                    {{ $gallery->end_date }}
                                @endif 
                                
                            </h7> 
                        </div>
                        <div class="rating">
                            <i class="bi bi-clock"></i>
                            <h7>{{ $gallery->time }}</h7> 
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

</div>
@endsection