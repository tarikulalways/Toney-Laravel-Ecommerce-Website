<div class="featured-area featured-area2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="featured-active2 owl-carousel next-prev-style">
                    @foreach ($categories as $category)
                    <div class="featured-wrap">
                        <div class="featured-img">
                            <img src="{{asset('storage/category')}}/{{ $category->cat_img }}" alt="{{ $category->cat_img }}">
                            <div class="featured-content">
                                <a href="{{ route('index.shope') }}">{{ $category->title }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
