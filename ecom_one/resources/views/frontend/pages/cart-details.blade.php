@extends('frontend.layout.master')
@section('frontend_title', 'Shope details page!')
@section('pageTitle', 'cart');
@section('frontend_content')
    @include('frontend.pages.widget.breadcumb')

    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="http://themepresss.com/tf/html/tohoney/cart">
                        <table class="table-responsive cart-wrap">
                            <thead>
                                <tr>
                                    <th class="images">Image</th>
                                    <th class="product">Product</th>
                                    <th class="ptice">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="total">Total</th>
                                    <th class="remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quntities as $cats)
                                    <tr>
                                        <td class="images"><img
                                                src="{{ asset('storage/product') }}/{{ $cats->product_img }}"
                                                alt="{{ $cats->product_img }}"></td>
                                        <td class="product"><a
                                                href="{{ route('index.shope') }}">{{ $cats->product_title }}</a></td>
                                        <td class="ptice">${{ $cats->product_price }}</td>
                                        <form action="{{ route('update.cart', ['shipingCart' => $cats->id]) }}" method="POST">
                                            <td class="quantity cart-plus-minus">
                                                <input type="text" name="updt_qyt" value="{{ $cats->product_qty }}">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton">+</div>
                                            </td>
                                        </form>
                                        <td class="total">${{ $cats->product_price }}</td>
                                        <td class="remove"><a
                                                href="{{ route('destroy.cart', ['shipingCart' => $cats->id]) }}"><i
                                                    class="fa fa-times"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-60">
                            <div class="col-xl-4 col-lg-5 col-md-6 ">
                                <div class="cartcupon-wrap">
                                    <ul class="d-flex">
                                        <li>
                                            <a href="{{ route('update.cart', ['shipingCart' => $cats->id]) }}" class="btn btn-dark">Update Cart</a>
                                        </li>
                                        <li><a href="shop.html">Continue Shopping</a></li>
                                    </ul>
                                    <h3>Cupon</h3>
                                    <p>Enter Your Cupon Code if You Have One</p>
                                    <div class="cupon-wrap">
                                        <input type="text" placeholder="Cupon Code">
                                        <button>Apply Cupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                <div class="cart-total text-right">
                                    <h3>Cart Totals</h3>
                                    <ul>
                                        <li><span class="pull-left">Subtotal </span>$380.00</li>
                                        <li><span class="pull-left"> Total </span> $380.00</li>
                                    </ul>
                                    <a href="checkout.html">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
