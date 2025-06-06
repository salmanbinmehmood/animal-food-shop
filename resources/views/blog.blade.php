@extends('layouts.main')
@section('content')

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>blogs</h3>
                </div>
            </div>
        </div>
    </div>
</section>


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
                @if($blogs->isNotEmpty())
                @foreach($blogs as $blog)
                <div class="col-md-4">
                    <div class="blog_card mb-4">
                        <div class="blog_img">
                            <img src="{{$blog['img_path']}}" alt="" class="img__cover">
                        </div>
                        <div class="blog_cont">
                            <div class="blog_date"><i class='bx bx-time-five'></i>{{ $blog->created_at->format('F j, Y') }}</div>
                            <h3 class="blog_title">{{$blog['post_title']}}</h3>
                            <p class="blog_text">{{$blog['short_desc']}}</p>
                            <div class="blog__bt">
                                <a href="{{ route('blog.detail', ['id' => $blog->id]) }}" class="themebtn">Read More <i class='bx bx-chevron-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </div>
</section>

@endsection
