@extends('layouts.main')
@section('content')


<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>products</h3>
                </div>
            </div>
        </div>
    </div>
</section>

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
            @if($products->isNotEmpty())
            @foreach($products as $product)
            <div class="col-md-3">
                <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="big_sale_item mb-4">
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
                            <li><span>({{$product['rating']}})</span></li>
                        </ul>
                        <h3>{{$product['title']}}e</h3>
                        <h4>{{$product['price']}}.00$<span>300.35$</span></h4>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>

    </div>
</section>


@endsection
