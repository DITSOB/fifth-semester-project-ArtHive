@extends('Layout.master')
@section('content')

    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="{{ asset('img/SliderImage1.jpg'); }}" alt="">
                <a href="">Get Started</a>
            </div>
            <div class="item">
                <img src="{{ asset('img/SliderImage2.png'); }}" alt="">
                <a href="">Explore</a>
            </div>
        </div>

        <div class="buttons">
            <button id="previous"><</button>
            <button id="next">></button>
        </div>

        <div class="slider">
            <ul class="dots">
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

@endsection