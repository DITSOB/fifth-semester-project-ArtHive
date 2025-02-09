@extends('Layout.master')
@section('content')
<div class="slide-container">

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">

            <div class="slide first">
                <img src="{{ asset('img/SliderImage1.jpg'); }}">
            </div>
            <div class="slide">
                <img src="{{ asset('img/SliderImage2.png'); }}">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label> 
            <label for="radio2" class="manual-btn"></label>        
        </div>

    </div>
</div>

@endsection