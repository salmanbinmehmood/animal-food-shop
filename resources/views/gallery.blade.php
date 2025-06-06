@extends('layouts.main')
@section('content')

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>gallery</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="assets/images/gallery1.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery1.png' alt=''>
                </a>
                <a href="assets/images/gallery2.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery2.png' alt=''>
                </a>
            </div>
            <div class="col-md-3">
                <a href="assets/images/gallery3.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery3.png' alt=''>
                </a>
                <a href="assets/images/gallery4.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery4.png' alt=''>
                </a>
            </div>
            <div class="col-md-3">
                <a href="assets/images/gallery5.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery5.png' alt=''>
                </a>
                <a href="assets/images/gallery6.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery6.png' alt=''>
                </a>
            </div>
            <div class="col-md-3">
                <a href="assets/images/gallery7.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery7.png' alt=''>
                </a>
                <a href="assets/images/gallery8.png" data-fancybox="gallery" class="gallery_item">
                    <img src='assets/images/gallery8.png' alt=''>
                </a>
            </div>
        </div>
    </div>
</section>


@endsection
