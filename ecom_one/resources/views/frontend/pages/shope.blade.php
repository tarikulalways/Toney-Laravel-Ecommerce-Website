@extends('frontend.layout.master')
@section('frontend_title', 'Shope page!')
@section('pageTitle', 'Shope')
@section('frontend_content')
    @include('frontend.pages.widget.breadcumb')

    <div class="product-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="product-menu">
                        @if (session()->has('cart'))
                            <div class="alert alert-success text-center">
                                {{ session('cart') }} <a href="{{ route('index.cart') }}" class="alert-link">view cart</a>
                            </div>
                        @endif
                        <ul class="nav justify-content-center">
                            <li>
                                <a class="active" data-toggle="tab" href="#all">All product</a>
                            </li>
                            @foreach ($categories as $item)
                                <li>
                                    <a data-toggle="tab" href="#{{ $item->id }}">{{ $item->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <ul class="row">
                        @foreach ($allProducts as $product)
                            <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img">
                                        <span>Sale</span>
                                        <img src="{{ asset('/storage/product') }}/{{ $product->image }}"
                                            alt="{{ $product->image }}">
                                        <div class="product-icon flex-style">
                                            <ul>
                                                <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                        href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="{{ route('single-product.shope', ['id' => $product->id]) }}"><i class="fa fa-shopping-bag"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a
                                                href="{{ route('single-product.shope', ['request' => $product->id]) }}">{{ $product->name }}</a>
                                        </h3>
                                        <p class="pull-left">${{ $product->price }}

                                        </p>
                                        <ul class="pull-right d-flex">
                                            @for ($i = 0; $i < $product->product_rating; $i++)
                                                <li><i class="fa fa-star"></i></li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @foreach ($categories as $categorie)
                    <div class="tab-pane active show" id="{{ $categorie->id }}">
                        <ul class="row">
                            @foreach ($categorie->product_rlt as $product_filt)
                                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                    <div class="product-wrap">
                                        <div class="product-img">
                                            <span>Sale</span>
                                            <img src="{{ asset('/storage/product') }}/{{ $product_filt->image }}"
                                                alt="">
                                            <div class="product-icon flex-style">
                                                <ul>
                                                    <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                                            href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="{{ route('single-product.shope', ['id' => $product->id]) }}"><i class="fa fa-shopping-bag"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h3><a
                                                    href="{{ route('single-product.shope', ['request' => $product_filt->id]) }}">{{ $product_filt->name }}</a>
                                            </h3>
                                            <p class="pull-left">${{ $product_filt->price }}

                                            </p>
                                            <ul class="pull-right d-flex">
                                                @for ($i = 0; $i < $product_filt->product_rating; $i++)
                                                    <li><i class="fa fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
