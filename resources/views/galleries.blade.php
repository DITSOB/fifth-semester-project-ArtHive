@extends('Layout.master')
@section('content')

<div class="card-body">
        <div class="card-container">
            <div class="card">
                <div class="imgBox">
                    <img src="{{ asset('img/SliderImage1.png'); }}" alt="">
                </div>
                <div class="card-content">
                    <div class="productName">
                        <h2>Location Name</h2>
                    </div>
                    <div class="price_rating">
                        <div class="rating">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h7>Location</h7> 
                        </div>
                        <div class="rating">
                            <i class="bi bi-calendar"></i>
                            <h7>Date</h7> 
                        </div>
                        <div class="rating">
                            <i class="bi bi-clock"></i>
                            <h7>Time</h7> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection