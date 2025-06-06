@extends('layouts.main')
@section('content')
<section class="home_banner">
    <div class="banner_img">
        <img src="assets/images/banner.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner_cont">
                    <h6>Welcome To Our Website! </h6>
                    <h3>Bring fine dinning for
                        your pet to your home</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua</p>
                    <div class="banner_btn">
                        <a href="{{route('product')}}" class="themebtn">View Products <i class='bx bx-chevron-right'></i></a>
                        <a href="{{route('contact')}}" class="themebtn btn-transparent">Contact Us <i
                                class='bx bx-chevron-right'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="explore_category">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-md-4">
                <div class="section_title">
                    <h3>Explore By Category</h3>
                </div>
            </div>
            <div class="col-md-2">
                <div class="section_btn">
                    <a href="product.php" class="themebtn btn-transparent">View Products <i
                            class="bx bx-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($product_cat as $cat)
            <div class="col-md-6">
                <a href="{{ route('products.byCategory', ['id' => $cat->id]) }}" class="category_item item1">
                    <div class="category_img">
                        <img src="{{$cat['img_path']}}" alt="">
                    </div>
                    <div class="category_cont">
                        <h4>{{$cat['title']}}</h4>
                        <p>{{$products->where('category_id',$cat->id)->count()}} Items</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="ou-story">
    <div class="container">
        <div class="main_story">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="story_main_cont">
                        <h3>Our Story</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="story_img">
                            <img src='assets/images/story_img.png' alt=''>
                            <a href="javascript:;" data-fancybox="gallery"><img src="assets/images/video_btn.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="services_main">
                        <div class="services_item">
                            <div class="services_icon">
                                <img src='assets/images/services_icon1.png' alt=''>
                            </div>
                            <div class="services_cont">
                                <h3>Our Services </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua</p>
                            </div>
                        </div>
                        <div class="services_item">
                            <div class="services_icon">
                                <img src='assets/images/services_icon2.png' alt=''>
                            </div>
                            <div class="services_cont">
                                <h3>Our Services </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua</p>
                            </div>
                        </div>
                        <div class="services_item">
                            <div class="services_icon">
                                <img src='assets/images/services_icon3.png' alt=''>
                            </div>
                            <div class="services_cont">
                                <h3>Our Services </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua</p>
                            </div>
                        </div>
                        <div class="services_item">
                            <div class="services_icon">
                                <img src='assets/images/services_icon4.png' alt=''>
                            </div>
                            <div class="services_cont">
                                <h3>Our Services </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if($is_sale)
<section class="big_sale">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="big_sale_cont">
                    <a href="javascript:;" class="big_sale_btn">
                        <h4>Bigger</h4>
                        <h3>Sale</h3>
                    </a>
                    <h1 id="headline">Deal End In:</h1>
                    <div id="countdown">
                        <ul>
                            {{-- {{ $diff->format('%a days %h hours %i minutes %s seconds') }} --}}
                            <li><span id="days">{{ $diff->format('%a')}}</span>days</li>
                            <li><span id="hours">{{ $diff->format('%h')}}</span>Hours</li>
                            <li><span id="minutes">{{ $diff->format('%i')}}</span>Minutes</li>
                            <li><span id="seconds">{{ $diff->format('%s')}}</span>Seconds</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach($sale_products as $sp)
                    <div class="col-md-4">
                        <div class="big_sale_item">
                            <div class="big_sale_img">
                                <img src="{{$sp['img_path']}}" alt="">
                                <span>new</span>
                            </div>
                            <div class="sale_cont">
                                <ul class="sale_list">
                                    <li><i class='bx bx-star'></i></li>
                                    <li><i class='bx bx-star'></i></li>
                                    <li><i class='bx bx-star'></i></li>
                                    <li><i class='bx bx-star'></i></li>
                                    <li><i class='bx bx-star'></i></li>
                                    <li><span>({{$sp['rating']}} Reviews)</span></li>
                                </ul>
                                <h3>{{$sp['title']}}</h3>
                                <h4>{{$sp['price']}}$<span>300.35$</span></h4>
                                <div class="sale_quantity_main">
                                    <div class="sale_quantity">
                                        <button onclick="decrementValue(this)" class="minus"><i
                                                class='bx bx-minus'></i></button>
                                        <input type="text" value="1">
                                        <button onclick="incrementValue(this)" class="add"><i
                                                class='bx bx-plus'></i></button>
                                    </div>
                                    <a href="{{ route('product.detail', ['id' => $sp->id]) }}"><i class='bx bx-cart'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<section class="explore_products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="section_title text-center mb-5">
                    <h3>Explore Our Products</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($products->take(4) as $product)
            <div class="col-md-3">
                <a href="{{route('product')}}" class="big_sale_item mb-4">
                    <div class="big_sale_img">
                        <img src="{{$product['img_path']}}" alt="">
                        <span>new</span>
                    </div>
                    <div class="sale_cont">
                        <ul class="sale_list">
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><span>({{$product['rating']}} Reviews)</span></li>
                        </ul>
                        <h3>{{$product['title']}}</h3>
                        <h4>{{$product['price']}}$<span>300.35$</span></h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="explore_productsbtn text-center mt-3">
                    <a href="{{route('product')}}" class="themebtn">view all products <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="feautrued_product">
    <div class="container">
        <div class="feat_pro__main">
            <div class="row">
                <div class="col-md-4">
                    <div class="feauPro_crd">
                        <h3 class="title">Dog Food <br>
                            <span>UP TO 30% OFF</span>
                        </h3>
                        <div class="feaut__bt">
                            <a href="{{route('product')}}" class="themebtn">Shop Now<i class='bx bx-chevron-right'></i></a>
                        </div>
                        <div class="feau_image">
                            <img src="assets/images/feaut_img1.png" alt="" class="img__contain">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="feauPro_crd feauPro_crd_green">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title title2">Cat Food <br>
                                    <span>UP TO 50% OFF</span>
                                </h3>
                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                <div class="feaut__bt">
                                    <a href="{{route('product')}}" class="themebtn">Shop Now<i class='bx bx-chevron-right'></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feau_image feau_image2">
                                    <img src="{{asset('assets/images/feaut_img2.png')}}" alt="" class="img__contain">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if($week_top_sold->isNotEmpty())
<div class="product_slider">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section_title">
                    <h3>This Week’s Top Selling</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="pro_slider">
        @foreach($week_top_sold->take(5) as $item)
        <a href="{{ route('product.detail', ['id' => $item->id]) }}" class="pro_items">
            <div class="pro_card">
                <div class="promo">
                    new
                </div>
                <div class="pro_img">
                    <img src="{{$item['img_path']}}" alt="" class="img__contain">
                </div>
                <div class="pro_cont">
                    <div class="pro_rating_sec">
                        <ul class="pro_rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <p class="pro_review">({{$item['rating']}} Reviews)</p>
                    </div>
                    <h3 class="pro_title">{{$item['title']}}</h3>
                    <p class="pro_price">{{$item['price']}}$ <span>300.35$</span></p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endif

<section class="blog">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-4">
                <div class="section_title text-center">
                    <h3>Explore Our Blogs</h3>
                </div>
            </div>
        </div>
        <div class="blog__main">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="blog_card">
                        <div class="blog_img">
                            <img src="{{$blog['img_path']}}" alt="" class="img__cover">
                        </div>
                        <div class="blog_cont">
                            <div class="blog_date"><i class='bx bx-time-five'></i>19 MAY,2024</div>
                            <h3 class="blog_title">{{$blog['post_title']}}</h3>
                            <p class="blog_text">{{$blog['short_desc']}}</p>
                            <div class="blog__bt">
                                <a href="{{ route('blog.detail', ['id' => $blog->id]) }}" class="themebtn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



@endsection

@section('js')

<script>
    // Get deal end time from the database and convert to JS time
    const dealEndTime = new Date("{{ \Carbon\Carbon::parse($sale->deal_end_time)->toIso8601String() }}").getTime();
    console.log(dealEndTime);

    const countdownElement = document.getElementById("countdown");

    const timer = setInterval(function () {
        const now = new Date().getTime();
        // console.log(now);



        const distance = dealEndTime - now;

        if (distance < 0) {
            clearInterval(timer);
            countdownElement.innerHTML = "Deal Ended";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        countdownElement.querySelector("#days").innerText = `${days}`;
        countdownElement.querySelector("#hours").innerText = `${hours}`;
        countdownElement.querySelector("#minutes").innerText = `${minutes}`;
        countdownElement.querySelector("#seconds").innerText = `${seconds}`;
    }, 1000);
</script>

@endsection
