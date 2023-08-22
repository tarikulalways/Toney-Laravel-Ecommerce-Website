@extends('frontend.layout.master')
@section('frontend_title', 'Shope details page!')
@section('pageTitle', 'Single');
@section('frontend_content')
    @include('frontend.pages.widget.breadcumb')

    <div class="single-product-area ptb-100">
        <div class="container">
            @foreach ($single_products as $single_product)
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-single-img">
                            <div class="product-active owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3240px;">

                                        <div class="owl-item active" style="width: 540px;">
                                            <div class="item" style="position: relative; overflow: hidden;">
                                                <img src="{{ asset('storage/product') }}/{{ $single_product->image }}"
                                                    alt="{{ $single_product->image }}">
                                                <img role="presentation"
                                                    src="file:///D:/laravel%20project/laravel%20project%20template/project3/assets/images/product/product-details/1.jpg"
                                                    class="zoomImg"
                                                    style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 550px; border: none; max-width: none; max-height: none;">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{-- <div class="owl-nav disabled">
                                <div class="owl-prev">prev</div>
                                <div class="owl-next">next</div>
                            </div>
                            <div class="owl-dots disabled"></div> --}}
                            </div>
                            {{-- <div class="product-thumbnil-active  owl-carousel owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 941px;">
                                    <div class="owl-item active" style="width: 146.667px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{ asset('assets/frontend/') }}/images/product/product-details/1.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 146.667px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{ asset('assets/frontend/') }}/images/product/product-details/2.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 146.667px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{ asset('assets/frontend/') }}/images/product/product-details/3.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 146.667px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{ asset('assets/frontend/') }}/images/product/product-details/4.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 146.667px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{ asset('assets/frontend/') }}/images/product/product-details/5.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 146.667px; margin-right: 10px;">
                                        <div class="item">
                                            <img src="{{ asset('assets/frontend/') }}/images/product/product-details/6.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="product-single-content">
                            <h3>{{ $single_product->name }}</h3>
                            <div class="rating-wrap fix">
                                <span class="pull-left">${{ $single_product->price }}</span>
                                <ul class="rating pull-right">
                                    @for ($i = 0; $i < $single_product->product_rating; $i++)
                                        <li><i class="fa fa-star"></i></li>
                                    @endfor
                                    <li>(@if ($single_product->product_rating == 0)
                                            {{ $single_product->product_rating }}
                                        @else
                                            {{ '0' }}{{ $single_product->product_rating }}
                                        @endif Customar Review)</li>
                                </ul>
                            </div>
                            <p>{{ $single_product->short_description }}</p>
                            <form action="{{ route('store.cart', ['id' => $single_product->id]) }}" method="POST">
                                @csrf
                                <ul class="input-style">
                                    <li class="quantity cart-plus-minus">
                                        <input name="quntity" type="text" value="1">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </li>
                                    <li><button type="submit" class="btn btn-danger">Add to Cart</button></li>
                                </ul>
                            </form>
                            <ul class="cetagory">
                                <li>Categories:</li>
                                @foreach ($single_cats as $single_cat)
                                    <li><a href="#">{{ $single_cat->title }}</a></li>
                                @endforeach
                            </ul>
                            <ul class="socil-icon">
                                <li>Share :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row mt-60">
                <div class="col-12">
                    <div class="single-product-menu">
                        <ul class="nav">
                            <li><a class="active" data-toggle="tab" href="#description">Description</a> </li>
                            <li><a data-toggle="tab" href="#tag">Faq</a></li>
                            <li><a data-toggle="tab" href="#review">Review</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <div class="description-wrap">
                                <p>we denounce with righteous indignation and dislike men who are so beguiled and
                                    demoralized by the charms of pleasure of the moment, so blinded by desire, that they
                                    cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to
                                    those who fail in their duty through weakness of will, which is the same as saying
                                    through shrinking from toil and pain. </p>
                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                                    of choice is untrammelled and when nothing prevents our being able to do what we like
                                    best, every pleasure is to be welcomed and every pain avoided. </p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tag">
                            <div class="faq-wrap" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5><button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">General Inquiries
                                                ?</button> </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5><button class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">How To Use ?</button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5><button class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">Shipping &amp;
                                                Delivery ?</button></h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfour">
                                        <h5><button class="collapsed" data-toggle="collapse" data-target="#collapsefour"
                                                aria-expanded="false" aria-controls="collapsefour">Additional Information
                                                ?</button></h5>
                                    </div>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingfive">
                                        <h5><button class="collapsed" data-toggle="collapse" data-target="#collapsefive"
                                                aria-expanded="false" aria-controls="collapsefive">Return Policy
                                                ?</button></h5>
                                    </div>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                            cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                            you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="review">
                            <div class="review-wrap">
                                <ul>
                                    <li class="review-items">
                                        <div class="review-img">
                                            <img src="assets/images/comment/1.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <h3><a href="#">GERALD BARNES</a></h3>
                                            <span>27 Jun, 2019 at 2:30pm</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan
                                                egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget
                                                eni Praesent et messages in con sectetur posuere dolor non.</p>
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="review-items">
                                        <div class="review-img">
                                            <img src="assets/images/comment/2.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <h3><a href="#">Olive Oil</a></h3>
                                            <span>15 may, 2019 at 2:30pm</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan
                                                egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget
                                                eni Praesent et messages in con sectetur posuere dolor non.</p>
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="review-items">
                                        <div class="review-img">
                                            <img src="assets/images/comment/3.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <h3><a href="#">Nature Honey</a></h3>
                                            <span>14 janu, 2019 at 2:30pm</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan
                                                egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget
                                                eni Praesent et messages in con sectetur posuere dolor non.</p>
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="add-review">
                                <h4>Add A Review</h4>
                                <div class="ratting-wrap">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>task</th>
                                                <th>1 Star</th>
                                                <th>2 Star</th>
                                                <th>3 Star</th>
                                                <th>4 Star</th>
                                                <th>5 Star</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>How Many Stars?</td>
                                                <td>
                                                    <input type="radio" name="a">
                                                </td>
                                                <td>
                                                    <input type="radio" name="a">
                                                </td>
                                                <td>
                                                    <input type="radio" name="a">
                                                </td>
                                                <td>
                                                    <input type="radio" name="a">
                                                </td>
                                                <td>
                                                    <input type="radio" name="a">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <h4>Name:</h4>
                                        <input type="text" placeholder="Your name here...">
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <h4>Email:</h4>
                                        <input type="email" placeholder="Your Email here...">
                                    </div>
                                    <div class="col-12">
                                        <h4>Your Review:</h4>
                                        <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Your review here..."></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-style">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
