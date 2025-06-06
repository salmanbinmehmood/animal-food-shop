@extends('layouts.main')
@section('content')


<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>add to cart</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="cart_product">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cart_main">
                    <div class="cart_table">
                        <table>
                            <tr class="cart_headings">
                                <th>
                                    <h5>Product</h5>
                                </th>
                                <th>
                                    <h5>Price</h5>
                                </th>
                                <th>
                                    <h5>Quantity</h5>
                                </th>
                                <th>
                                    <h5>Subtotal</h5>
                                </th>
                            </tr>
                            <tr class="cart_data">
                                <td class="cart_img">
                                    <div class="cart_pro_img">
                                        <a href="javascript:;"></a> <img src="assets/images/sub_image1.png" alt="">
                                        <h5>Place Your Title Here</h5>
                                    </div>
                                </td>
                                <td>
                                    <p>$000,000.00</p>
                                </td>
                                <td>
                                    <div class="cart-icons">
                                        <button onclick="decrementValue(this)"><i
                                                class='bx bx-chevron-left'></i></button>
                                        <input type="text" value="1">
                                        <button onclick="incrementValue(this)"><i
                                                class='bx bx-chevron-right'></i></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="sub_total">
                                        <p>$000,000.00</p>
                                        <a href="javascript:;"><i class='bx bx-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="cart_data">
                                <td class="cart_img">
                                    <div class="cart_pro_img">
                                        <a href="javascript:;"></a> <img src="assets/images/sub_image2.png" alt="">
                                        <h5>Place Your Title Here</h5>
                                    </div>
                                </td>
                                <td>
                                    <p>$000,000.00</p>
                                </td>
                                <td>
                                    <div class="cart-icons">
                                        <button onclick="decrementValue(this)"><i
                                                class='bx bx-chevron-left'></i></button>
                                        <input type="text" value="1">
                                        <button onclick="incrementValue(this)"><i
                                                class='bx bx-chevron-right'></i></button>
                                    </div>
                                </td>
                                <td>
                                <div class="sub_total">
                                        <p>$000,000.00</p>
                                        <a href="javascript:;"><i class='bx bx-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="cart_data">
                                <td class="cart_img">
                                    <div class="cart_pro_img">
                                        <a href="javascript:;"></a> <img src="assets/images/sub_image3.png" alt="">
                                        <h5>Place Your Title Here</h5>
                                    </div>
                                </td>
                                <td>
                                    <p>$000,000.00</p>
                                </td>
                                <td>
                                    <div class="cart-icons">
                                        <button onclick="decrementValue(this)"><i
                                                class='bx bx-chevron-left'></i></button>
                                        <input type="text" value="1">
                                        <button onclick="incrementValue(this)"><i
                                                class='bx bx-chevron-right'></i></button>
                                    </div>
                                </td>
                                <td>
                                <div class="sub_total">
                                        <p>$000,000.00</p>
                                        <a href="javascript:;"><i class='bx bx-trash'></i></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cart_box">
                    <div class="box_heading">
                        <h3>Cart Total</h3>
                    </div>
                    <div class="price">
                        <h5>Subtotal</h5>
                        <p>$000,000.00</p>
                    </div>
                    <div class="price">
                        <h5>Total</h5>
                        <p>$000,000.00</p>
                    </div>
                    <div class="cart_btn">
                        <a href="checkout.php" class="themebtn btn-transparent">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
