@extends('Layout.master')
@section('content')

<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="flex">
                <h2>About Us</h2>
                <h3>Discover Our Team's Story</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum hic vel autem necessitatibus. Pariatur neque illo veniam ullam nihil, aut natus nisi qui cumque hic odio excepturi exercitationem! Ratione, consectetur.
                </p>
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                <a href="#" class="about-btn">Learn More</a>
            </div>
            <div class="flex">
                <img src="{{ asset('img/AboutUs.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

@endsection