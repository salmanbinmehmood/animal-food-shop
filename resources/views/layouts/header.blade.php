<header class="header">
        <div class="top_header">
            <div class="container">
                <div class="top_bar">
                    <div class="top_contact">
                        <a href="tel:1234567890"><i class='bx bxs-phone-call' ></i> Call Us On: (123) 456-7890</a>
                        <a href="mailto:Info@Demolink.com"><i class="bx bx-envelope" aria-hidden="true"></i>
                        Email: Info@Demolink.com</a>
                    </div>
                    <div class="myaccount">
                        <select name="lang" id="">
                            <option value="1" disabled selected>my account</option>
                            <option value="2">my account</option>
                        </select>
                        <select name="lang" id="">
                            <option value="1" disabled selected>english</option>
                            <option value="2">english</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-main">
                <a href="index.php" class="header__logo">
                    <img src="assets/images/logo.png" alt="Logo" class="imgFluid" />
                </a>
                <ul class="header-main__nav">
                    <li><a href="{{route('index')}}"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "index.php") !== false ? "active" : ""); ?>">home</a>
                    </li>
                    <li><a href="{{route('about')}}"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "about.php") !== false ? "active" : ""); ?>">about</a>
                    </li>
                    <li><a href="{{route('product')}}"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "product.php") !== false ? "active" : ""); ?>">Products</a>
                    </li>
                    <li><a href="{{route('gallery')}}"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "gallery.php") !== false ? "active" : ""); ?>">Gallery</a>
                    </li>
                    <li><a href="{{route('blog')}}"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "blog.php") !== false ? "active" : ""); ?>">Blog</a>
                    </li>
                    <li><a href="{{route('contact')}}"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "contact.php") !== false ? "active" : ""); ?>">contact
                            Us</a></li>
                </ul>
                <div class="header_btn">
                    <a href="javascript:;" class="shop"><i class="search bx bx-search"></i> search</a>
                    <a href="{{route('cart')}}" class="shop"><i class='bx bx-cart' ></i> cart</a>
                    <a href="login.php" class="themebtn">log in <i class='bx bx-chevron-right'></i></a>
                </div>
            </div>
        </div>
    </header>
