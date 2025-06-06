@extends('layouts.main')
@section('content')

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>contact us</h3>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact">
    <div class="container">
        <div class="contact__main">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="contact_image">
                        <img src="assets/images/contact_img.png" alt="" class="img__cover">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact_cont">
                        <h3 class="contact_title">Contact Informations:</h3>
                        <p class="contact_text">SAY SOMETHING TO START A LIVE CHAT!</p>
                        <form action="{{route('submit-contact')}}" method="post" class="contact_form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="fname" placeholder="First name:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lname" placeholder="Last Name:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" placeholder="Email:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Phone Number:">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" id="" placeholder="Message..."></textarea>
                                    <div class="contact__bt">
                                        <button type="submit" class="themebtn">SEND MESSAGE</button>
                                        <a href=""><i class='bx bxs-envelope'></i><span>Info@Demolink.com</span></a>
                                        <a href=""><i class='bx bxs-phone-incoming'></i><span>(123)456-7890</span></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
