@extends('frontend.layout.master')
@section('frontend_title', 'Home page!')

@section('frontend_content')    
    <!-- slider-area start -->
    @include('frontend.pages.widget.slide')
    <!-- slider-area end -->
    <!-- featured-area start -->
    @include('frontend.pages.widget.featured')
    <!-- featured-area end -->
    <!-- start count-down-section -->
    @include('frontend.pages.widget.counter')
    <!-- end count-down-section -->
    <!-- bet selling product-area start -->
    @include('frontend.pages.widget.best-product')
    <!-- bet selling product-area end -->
    <!-- letest product-area start -->
    @include('frontend.pages.widget.lates-product')
    <!-- letestproduct-area end -->
    <!-- testmonial-area start -->
    @include('frontend.pages.widget.testimonial')
    <!-- testmonial-area end -->

@endsection
