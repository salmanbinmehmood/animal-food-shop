@extends('layouts.main')
@section('content')

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>blogs detail</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="blog_detail_img">
                            <img src="{{$blog['img_path']}}" alt=''>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_detail_cont">
                            <h3>{{$blog['post_title']}}</h3>
                            <p>{{$blog['content']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

