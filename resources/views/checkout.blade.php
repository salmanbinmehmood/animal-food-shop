<?php
$title = "Home";
include 'include/header.php';
?>

<section class="inner_banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="innerbanner_cont">
                    <h3>check out</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="my-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="my-cart-box">
                    <h3>Details Order</h3>
                    <div class="order-detail-box">
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Subtotal</h4>
                            </div>
                            <div class="order-detail-line">
                                <h4>$000.000</h4>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Shipping Cost</h4>
                            </div>
                            <div class="order-detail-line">
                                <h4>$000.000</h4>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Promo Code</h4>
                            </div>
                            <div class="order-detail-line">
                                <h4>Lorem Ipsum</h4>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Packaging</h4>
                            </div>
                            <div class="order-detail-line">
                                <h4>$000.000</h4>
                            </div>
                        </div>
                        <hr class="hr">
                        <div class="order-grand-total ">
                            <div class="order-detail-line">
                                <h4>Grand Total</h4>
                            </div>
                            <div class="order-detail-line">
                                <h4 class="total">$000.000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-cart-box mt-5">
                    <h3 class="d-flex justify-content-between align-items-center">Payment Details <span>$000.000</span>
                    </h3>
                    <div class="order-detail-box">
                        <div class="order-detail-box-item d-block">
                            <div class="order-detail-line mw-100">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ever since the
                                    1500s,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="my-cart-box">
                    <h3>Order Details </h3>
                    <div class="order-detail-box">
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Order Number</h4>
                            </div>
                            <div class="order-detail-line">
                                <h4>MTAWEB-3A86D4DB <span>COPY</span></h4>
                                <p>Always remember Order Number for
                                    easy tracking</p>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Purchase Date</h4>
                            </div>
                            <div class="order-detail-line">
                                <h5>Lorem ipsum</h5>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Items</h4>
                            </div>
                            <div class="order-detail-line">
                                <h5>Lorem Ipsum</h5>
                                <h6>Lorem Ipsum</h6>
                                <h5>Lorem Ipsum</h5>
                                <h6>Lorem Ipsum</h6>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Name</h4>
                            </div>
                            <div class="order-detail-line">
                                <h5>Lorem ipsum</h5>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Phone</h4>
                            </div>
                            <div class="order-detail-line">
                                <h5>Lorem ipsum</h5>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Email</h4>
                            </div>
                            <div class="order-detail-line">
                                <h5>Lorem ipsum</h5>
                            </div>
                        </div>
                        <div class="order-detail-box-item">
                            <div class="order-detail-line">
                                <h4>Shipping Address</h4>
                            </div>
                            <div class="order-detail-line">
                                <h5>Lorem ipsum</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="my-cart-box">
                    <h3>Payment Method</h3>
                </div>
                <div class="Payment_method">
                    <form action="">
                        <div class="payment_item">
                            <div class="peyment_radio">
                                <input type="radio" id="payment1" name="fav_language" value="payment1">
                                <label for="payment1">BNI Cicilan 0%</label>
                            </div>
                            <img src='assets/images/pey_card1.png' alt=''>
                        </div> 
                        <div class="payment_item">
                            <div class="peyment_radio">
                                <input type="radio" id="payment2" name="fav_language" value="payment2">
                                <label for="payment2">Mandiri Cicilan 0%</label>
                            </div>
                            <img src='assets/images/pey_card2.png' alt=''>
                        </div> 
                        <div class="payment_item">
                            <div class="peyment_radio">
                                <input type="radio" id="payment3" name="fav_language" value="payment3">
                                <label for="payment3">Bank Transfer</label>
                            </div>
                            <img src='assets/images/pey_card3.png' alt=''>
                        </div> 
                        <div class="payment_item">
                            <div class="peyment_radio">
                                <input type="radio" id="payment4" name="fav_language" value="payment4">
                                <label for="payment4">Credit Card</label>
                            </div>
                            <img for="payment4" src='assets/images/pey_card4.png' alt=''>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include 'include/footer.php';
?>