@extends('layouts.main')
@section('content')

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>login</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="login_sec">
    <div class="container">
        <div class="row justify-content-center login_bottom">
            <div class="col-md-5">
                <div class="login_form">
                    <h3 class="form_title">LOG IN</h3>
                    <form action="checklogin.php" method="post">
                        <div class="form-group">
                            <div class="form_field mb-3rem">
                                <input type="email" id="email" aria-describedby="emailHelp" name="email"
                                    placeholder="Info@Demolink.com">
                                <a href="javascript:;"><i class='bx bxs-envelope'></i></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form_field mb-4">
                                <input type="password" id="password" name="password" placeholder="*********">
                                <a href="javascript:;"><i class='bx bx-show'></i></a>
                            </div>
                        </div>
                        <button type="submit" class="themebtn">Log in</button>
                        <p>Don't have an account? <a href="javascript:;">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="login_form">
                    <h3 class="form_title">SIGN UP</h3>
                    <form action="checklogin.php" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <div class="form_field">
                                <input type="text" id="name" aria-describedby="NameHelp" name="name"
                                    placeholder="Info@Demolink.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <div class="form_field">
                                <input type="email" id="email" aria-describedby="emailHelp" name="email"
                                    placeholder="Info@Demolink.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Pasword</label>
                            <div class="form_field mb-4">
                                <input type="password" id="password" name="password" placeholder="*********">
                                <a href="javascript:;"><i class='bx bx-show'></i></a>
                            </div>
                        </div>
                        <button type="submit" class="themebtn">sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
