<div class="product-area">
    <div class="fluid-container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Our Latest Product</h2>
                    <img src="{{asset('assets/frontend')}}/images/section-title.png" alt="">
                </div>
            </div>
        </div>
        <ul class="row">
            @foreach ($products as $item)
            <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                <div class="product-wrap">
                    <div class="product-img">
                        <span>Sale</span>
                        <img src="{{asset('storage/product')}}/{{ $item->image }}" alt="">
                        <div class="product-icon flex-style">
                            <ul>
                                <li><a data-toggle="modal" data-target="#exampleModalCenter"
                                        href="javascript:void(0);"><i class="fa fa-eye"></i></a></li>
                                <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-bag"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ route('index.shope') }}">{{ $item->name }}</a></h3>
                        <p class="pull-left">${{ $item->price }}

                        </p>
                        <ul class="pull-right d-flex">
                            @for($i = 0; $i < $item->product_rating; $i++)
                            <li><i class="fa fa-star"></i></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
