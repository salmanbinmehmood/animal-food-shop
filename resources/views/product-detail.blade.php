@extends('layouts.main')
@section('content')

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>product detail</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product_detail">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="detail_main">
                    <div class="product_detail_slider">
                        <div class="product_detail_item">
                            <img id="main-image" src="{{$product['img_path']}}" alt="main image">

                        </div>

                    </div>
                    <div class="detail_sub_slider">
                        @foreach($other_images as $image)

                        <div class="sub_item" data-id="{{ $image['id'] }}" style="cursor: pointer;">

                            <img src="{{$image['img_path']}}" alt=''>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product_detail_cont">
                    <h3 id="main-title">Your Product <br> {{ $product['title']}} </h3>
                    <ul class="star">
                        <li id="main-rating"><span>{{ $product['rating']}}</span></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                    </ul>
                    <h4 class="price" id="main-price"><span>$40.00</span>${{$product['price']}}</h4>
                    <p class="detail_para" id="main-short_desc">${{$product['short_desc']}}</p>
                    <div class="quantity">
                        <h4>Quantity</h4>
                        <div class="quintity_item">
                            <button onclick="decrementValue(this)" class="minus"><i
                                    class='bx bx-chevron-down'></i></button>
                            <input type="text" value="1">
                            <button onclick="incrementValue(this)" class="add"><i class='bx bx-chevron-up'></i></button>
                        </div>
                    </div>
                    <a href="cart.php" class="themebtn detail_btn" >add to cart</a>

                    <div class="cat_and_tag">
                        <p><b>Category:</b>Lorem</p>
                        <p><b>Tags:</b>Lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="explore_products pro_detail">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section_title mb-5">
                    <h3>Related Products :</h3>
                </div>
            </div>
        </div>

        <div class="row">


            @foreach($other_products as $op)
            <div class="col-md-3">
                <a href="{{ route('product.detail', ['id' => $op->id]) }}" class="big_sale_item mb-4">
                    <div class="big_sale_img">
                        <img src="{{$op['img_path']}}" alt="">
                        <span>new</span>
                    </div>
                    <div class="sale_cont">
                        <ul class="sale_list">
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><i class='bx bx-star'></i></li>
                            <li><span>({{$op['rating']}} Reviews)</span></li>
                        </ul>
                        <h3>{{$op['title']}}</h3>
                        <h4>{{$op['price']}}$<span>300.35$</span></h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
@section('css')
<style type="text"></style>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('.sub_item').on('click', function () {
        let productId = $(this).data('id');

        $.ajax({
            url: '/product/ajax/' + productId,
            method: 'GET',
            success: function (data) {
                $('#main-image').attr('src', data.img_path);
            }
        });
    });
</script>

@endsection
