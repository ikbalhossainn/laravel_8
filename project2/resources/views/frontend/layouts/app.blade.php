<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harmic - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.ico')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="assets/css/vendor/Pe-icon-7-stroke.css" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup.min.css')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

</head>

<body>

    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        <header class="main-header_area position-relative">
            <div class="header-top border-bottom d-none d-md-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="header-top-left">
                                <ul class="dropdown-wrap text-matterhorn">
                                    <li class="dropdown">
                                        <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            English
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="languageButton">
                                            <li><a class="dropdown-item" href="#">French</a></li>
                                            <li><a class="dropdown-item" href="#">Italian</a></li>
                                            <li><a class="dropdown-item" href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="currencyButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            USD
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="currencyButton">
                                            <li><a class="dropdown-item" href="#">GBP</a></li>
                                            <li><a class="dropdown-item" href="#">ISO</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        Call Us
                                        <a href="tel://3965410">3965410</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-top-right text-matterhorn">
                                <p class="shipping mb-0">Free delivery on order over <span>$200</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-middle-wrap">
                                <a href="index.html" class="header-logo">
                                    <img src="{{asset('frontend/assets/images/logo/dark.png')}}" alt="Header Logo">
                                </a>
                                <div class="header-search-area d-none d-lg-block">
                                    <form action="#" class="header-searchbox">
                                        <select class="nice-select select-search-category wide">
                                            <option value="all">All Category</option>
                                            <option value="product-item">Product Item</option>
                                            <option value="product-item-2">Product Item 02</option>
                                            <option value="product-item-3">Product Item 03</option>
                                            <option value="product-item-4">Product Item 04</option>
                                            <option value="product-item-5">Product Item 05</option>
                                        </select>
                                        <input class="input-field" type="text" placeholder="Search Products">
                                        <button class="btn btn-outline-whisper btn-primary-hover" type="submit"><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-right">
                                    <ul>
                                        <li class="dropdown d-none d-md-block">
                                            <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="pe-7s-users"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButton">
                                                <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                                <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                                            </ul>
                                        </li>
                                        <li class="d-none d-md-block">
                                            <a href="wishlist.html">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="d-block d-lg-none">
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap me-3 me-lg-0">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <i class="pe-7s-shopbag"></i>
                                                <span class="quantity">3</span>
                                            </a>
                                        </li>
                                        <li class="mobile-menu_wrap d-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                                <i class="pe-7s-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header header-sticky" data-bg-color="#bac34e">
                <div class="container">
                    <div class="main-header_nav position-relative">
                        <div class="row align-items-center">
                            <div class="col-lg-12 d-none d-lg-block">
                                <div class="main-menu">
                                    <nav class="main-nav">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home
                                                </a>

                                            </li>
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="megamenu-holder">
                                                <a href="javascript:void(0)">Shop
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                                <ul class="drop-menu megamenu">
                                                    <li>
                                                        <span class="title">Shop Layout</span>
                                                        <ul>

                                                            <li>
                                                                <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <span class="title">Product Style</span>
                                                        <ul>

                                                            <li>
                                                                <a href="single-product-variable.html">Single Product Variable</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <span class="title">Product Related</span>
                                                        <ul>
                                                            <li>
                                                                <a href="my-account.html">My Account</a>
                                                            </li>
                                                            <li>
                                                                <a href="login-register.html">Login | Register</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-slider-wrap">
                                                        <div class="swiper-container menu-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide img-zoom-effect with-overlay">
                                                                    <a href="#" class="single-item">
                                                                        <img class="img-full" src="frontend/assets/images/megamenu/slider/1.jpg" alt="Megamenu Slider">
                                                                    </a>
                                                                </div>
                                                                <div class="swiper-slide img-zoom-effect with-overlay">
                                                                    <a href="#" class="single-item">
                                                                        <img class="img-full" src="frontend/assets/images/megamenu/slider/2.jpg" alt="Megamenu Slider">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="faq.html">FAQs</a>
                                            </li>
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="harmic-offcanvas-body">
                    <div class="inner-body">
                        <div class="harmic-offcanvas-top">
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <div class="offcanvas-user-info text-center px-6 pb-5">
                            <div class=" text-silver">
                                <p class="shipping mb-0">Free delivery on order over <span class="text-primary">$200</span></p>
                            </div>
                            <ul class="dropdown-wrap justify-content-center text-silver">
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn" type="button" id="languageButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        English
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="languageButtonTwo">
                                        <li><a class="dropdown-item" href="#">French</a></li>
                                        <li><a class="dropdown-item" href="#">Italian</a></li>
                                        <li><a class="dropdown-item" href="#">Spanish</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn usd-dropdown" type="button" id="currencyButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        USD
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="currencyButtonTwo">
                                        <li><a class="dropdown-item" href="#">GBP</a></li>
                                        <li><a class="dropdown-item" href="#">ISO</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropup">
                                    <button class="btn btn-link dropdown-toggle ht-btn p-0" type="button" id="settingButtonTwo" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingButtonTwo">
                                        <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                        <li><a class="dropdown-item" href="login-register.html">Login | Register</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas-menu_area">
                            <nav class="offcanvas-navigation">
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Home 
                                         
                                        </span>
                                        </a>

                                    </li>
                                    <li>
                                        <a href="about.html">
                                            <span class="mm-text">About Us</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop 
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">
                                                    <span class="mm-text">Shop Layout 
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="shop-leftsidebar.html">
                                                            <span class="mm-text">Shop Left Sidebar</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">
                                                    <span class="mm-text">Product Style
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                                </a>
                                                <ul class="sub-menu">

                                                    <li>
                                                        <a href="single-product-variable.html">
                                                            <span class="mm-text">Single Product Variable</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">
                                                    <span class="mm-text">Product Related
                                                    <i class="pe-7s-angle-down"></i>
                                                </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="my-account.html">
                                                            <span class="mm-text">My Account</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="login-register.html">
                                                            <span class="mm-text">Login | Register</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="faq.html">
                                            <span class="mm-text">FAQs 

                                        </span>
                                        </a>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Blog 
                                            <i class="pe-7s-angle-down"></i>
                                        </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog-left-sidebar.html">
                                                    <span class="mm-text">Blog</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            <span class="mm-text">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="harmic-offcanvas-body">
                    <div class="container h-100">
                        <div class="offcanvas-search">
                            <div class="harmic-offcanvas-top">
                                <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                            </div>
                            <span class="searchbox-info">Start typing and press Enter to search</span>
                            <form action="#" class="hm-searchbox">
                                <input type="text" placeholder="Search">
                                <button class="search-btn" type="submit"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="harmic-offcanvas-body">
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4 class="mb-0">Shopping Cart</h4>
                            <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i
                                    class="pe-7s-close"></i></a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="{{asset('frontend/assets/images/product/small-size/1-1-112x124.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Black Pepper Grains</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#"><i
                                    class="pe-7s-close"></i></a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="{{asset('frontend/assets/images/product/small-size/1-2-112x124.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Peanut Big Bean</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="#">
                                    <i class="pe-7s-close"></i>
                                </a>
                                <a href="shop.html" class="product-item_img">
                                    <img class="img-full" src="{{asset('frontend/assets/images/product/small-size/1-3-112x124.jpg')}}" alt="Product Image">
                                </a>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop.html">Dried Lemon Green</a>
                                    <span class="product-item_quantity">1 x $80.00</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$240.00</span>
                    </div>
                    <div class="group-btn_wrap d-grid gap-2">
                        <a href="cart.html" class="btn btn-secondary btn-primary-hover">View Cart</a>
                        <a href="checkout.html" class="btn btn-secondary btn-primary-hover">Checkout</a>
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>
        <!-- Main Header Area End Here -->

        <!-- Begin Slider Area -->
        <div class="slider-area">

            <!-- Main Slider -->
            <div class="swiper-container main-slider swiper-arrow with-bg_white">
                <div class="swiper-wrapper">
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="{{asset('frontend/assets/images/slider/bg/1-1.jpg')}}">
                            <div class="parallax-img-wrap">
                                <div class="chilly">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="{{asset('frontend/assets/images/slider/inner-img/1-1-231x210.png')}}" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="avocado">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.5">
                                            <img src="{{asset('frontend/assets/images/slider/inner-img/1-2-224x204.png')}}" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="parallax-with-content">
                                    <div class="slide-content">
                                        <span class="sub-title mb-3">Natural & Organic</span>
                                        <h2 class="title mb-9">-40% Offer All <br> Products.</h2>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="parallax-img-wrap">
                                        <div class="tomatoes">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.5">
                                                    <img src="{{asset('frontend/assets/images/slider/inner-img/1-3-601x534.png')}}" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide animation-style-01">
                        <div class="slide-inner bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                            <div class="parallax-img-wrap">
                                <div class="chilly">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="{{asset('frontend/assets/images/slider/inner-img/1-1-231x210.png')}}" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="avocado">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.5">
                                            <img src="{{asset('frontend/assets/images/slider/inner-img/1-2-224x204.png')}}" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="parallax-with-content">
                                    <div class="slide-content">
                                        <span class="sub-title mb-3">Natural & Organic</span>
                                        <h2 class="title mb-9">-40% Offer All <br> Products.</h2>
                                        <div class="button-wrap">
                                            <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                        </div>
                                    </div>
                                    <div class="parallax-img-wrap">
                                        <div class="tomatoes">
                                            <div class="scene fill">
                                                <div class="expand-width" data-depth="0.5">
                                                    <img src="{{asset('frontend/assets/images/slider/inner-img/2-1-601x426.png')}}" alt="Inner Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination with-bg d-md-none"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin Shipping Area -->
        <div class="shipping-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{asset('frontend/assets/images/shipping/icon/plane.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Free Shipping</h5>
                                <p class="short-desc mb-0">Free Home Delivery Offer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{asset('frontend/assets/images/shipping/icon/earphones.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Online Support</h5>
                                <p class="short-desc mb-0">24/7 Online Support Provide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                        <div class="shipping-item">
                            <div class="shipping-img">
                                <img src="{{asset('frontend/assets/images/shipping/icon/shield.png')}}" alt="Shipping Icon">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Secure Payment</h5>
                                <p class="short-desc mb-0">Fully Secure Payment System</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shipping Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav product-tab-nav pb-10" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="active" id="all-items-tab" data-bs-toggle="tab" href="#all-items" role="tab" aria-controls="all-items" aria-selected="true">
                                    <div class="product-tab-icon">
                                        <img src="{{asset('frontend/assets/images/product/icon/1.png')}}" alt="Product Icon">
                                    </div>
                                    All Items
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="fresh-fruits-tab" data-bs-toggle="tab" href="#fresh-fruits" role="tab" aria-controls="fresh-fruits" aria-selected="false">
                                    <div class="product-tab-icon">
                                        <img src="{{asset('frontend/assets/images/product/icon/2.png" alt="Product Icon')}}">
                                    </div>
                                    Fresh Fruits
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="vegetable-tab" data-bs-toggle="tab" href="#vegetable" role="tab" aria-controls="vegetable" aria-selected="false">
                                    <div class="product-tab-icon">
                                        <img src="{{asset('frontend/assets/images/product/icon/3.png" alt="Product Icon')}}">
                                    </div>
                                    Vegetable
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="fish-meat-tab" data-bs-toggle="tab" href="#fish-meat" role="tab" aria-controls="fish-meat" aria-selected="false">
                                    <div class="product-tab-icon">
                                        <img src="{{asset('frontend/assets/images/product/icon/4.png" alt="Product Icon')}}">
                                    </div>
                                    Fish & Meat
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="wheat-tab" data-bs-toggle="tab" href="#wheat" role="tab" aria-controls="wheat" aria-selected="false">
                                    <div class="product-tab-icon">
                                        <img src="{{asset('frontend/assets/images/product/icon/5.png" alt="Product Icon')}}">
                                    </div>
                                    Wheat
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-items" role="tabpanel" aria-labelledby="all-items-tab">
                                <div class="product-item-wrap row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-1-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-2-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-3-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-4-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Natural Coconut</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-5-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-6-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Green Vegetable</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="{{asset('frontend/assets/images/product/medium-size/1-7-270x300.jpg')}}" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Lemon Juice</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fresh-fruits" role="tabpanel" aria-labelledby="fresh-fruits-tab">
                                <div class="product-item-wrap row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Natural Coconut</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Green Vegetable</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Lemon Juice</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vegetable" role="tabpanel" aria-labelledby="vegetable-tab">
                                <div class="product-item-wrap row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Natural Coconut</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Green Vegetable</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Lemon Juice</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="fish-meat" role="tabpanel" aria-labelledby="fish-meat-tab">
                                <div class="product-item-wrap row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Natural Coconut</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Green Vegetable</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Lemon Juice</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="wheat" role="tabpanel" aria-labelledby="wheat-tab">
                                <div class="product-item-wrap row">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Natural Coconut</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Green Vegetable</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Lemon Juice</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="single-product.html">
                                                    <img class="img-full" src="frontend/assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                                </a>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <i class="pe-7s-shuffle"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                <i class="pe-7s-like"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                                                <div class="price-box pb-1">
                                                    <span class="new-price">$80.00</span>
                                                </div>
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area section-space-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-item">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="frontend/assets/images/banner/1-1-370x250.jpg" alt="Banner Image">
                                <div class="inner-content">
                                    <h5 class="offer">-10% Off</h5>
                                    <h4 class="title mb-5">Bell Pepper<br>Orange</h4>
                                    <div class="button-wrap">
                                        <a class="btn btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                        <div class="banner-item">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="frontend/assets/images/banner/1-2-370x250.jpg" alt="Banner Image">
                                <div class="inner-content">
                                    <h5 class="offer">-20% Off</h5>
                                    <h4 class="title mb-5">Fruit Juice<br>Package</h4>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                        <div class="banner-item">
                            <div class="banner-img img-zoom-effect">
                                <img class="img-full" src="frontend/assets/images/banner/1-3-370x250.jpg" alt="Banner Image">
                                <div class="inner-content">
                                    <h5 class="offer">-30% Off</h5>
                                    <h4 class="title mb-5">Full Fresh<br>Vegetable</h4>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area section-space-y-axis-100">
            <div class="container">
                <div class="section-title text-center pb-55">
                    <span class="sub-title text-primary">See Our Latest</span>
                    <h2 class="title mb-0">Arrival Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-slider swiper-arrow with-radius border-issue">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/medium-size/1-12-270x300.jpg" alt="Product Images">
                                            </a>
                                            <div class="product-add-action">
                                                <ul>
                                                    <li>
                                                        <a href="cart.html">
                                                            <i class="pe-7s-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">
                                                            <i class="pe-7s-shuffle"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="pe-7s-like"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Natural Coconut</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                    <li><i class="pe-7s-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-nav-wrap">
                                <div class="swiper-button-next"></div>
                            </div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area banner-with-parallax py-10" data-bg-image="assets/images/banner/2-1-1920x523.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="parallax-img-wrap">
                            <div class="papaya">
                                <div class="scene fill">
                                    <div class="expand-width" data-depth="0.2">
                                        <img src="{{asset('frontend/assets/images/banner/inner-img/2-1-503x430.png')}}" alt="Banner Images">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="banner-content text-white text-center text-md-start">
                            <div class="section-title">
                                <span class="sub-title">New Offer Products</span>
                                <h2 class="title font-size-60 mb-6">SAVE 20% OFF</h2>
                            </div>
                            <div class="countdown-wrap">
                                <div class="countdown item-4" data-countdown="2023/01/01" data-format="short">
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time daysLeft"></span>
                                        <span class="countdown__text daysText"></span>
                                    </div>
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time hoursLeft"></span>
                                        <span class="countdown__text hoursText"></span>
                                    </div>
                                    <div class="countdown__item me-3">
                                        <span class="countdown__time minsLeft"></span>
                                        <span class="countdown__text minsText"></span>
                                    </div>
                                    <div class="countdown__item">
                                        <span class="countdown__time secsLeft"></span>
                                        <span class="countdown__text secsText"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrap pt-10">
                                <a class="btn btn-custom-size lg-size btn-white rounded-0" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        <!-- Begin Product Area -->
        <div class="product-area section-space-top-100">
            <div class="container">
                <div class="section-title text-center pb-55">
                    <span class="sub-title text-primary">See Our Latest</span>
                    <h2 class="title mb-0">Arrival Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-list-slider border-issue">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/small-size/1-1-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/small-size/1-2-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/small-size/1-3-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/small-size/1-4-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Natural Coconut</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="frontend/assets/images/product/small-size/1-5-112x124.jpg" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-list-item">
                                        <div class="product-img img-zoom-effect">
                                            <a href="single-product.html">
                                                <img class="img-full" src="{{asset('frontend/assets/images/product/small-size/1-6-112x124.jpg')}}" alt="Product Images">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product.html">Green Vegetable</a>
                                            <div class="price-box pb-1">
                                                <span class="new-price">$80.00</span>
                                            </div>
                                            <div class="rating-box-wrap">
                                                <div class="rating-box">
                                                    <ul>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                        <li><i class="pe-7s-star"></i></li>
                                                    </ul>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="cart.html">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->

        <!-- Begin Blog Area -->
        <div class="blog-area section-space-y-axis-100">
            <div class="container">
                <div class="section-title text-center pb-55">
                    <span class="sub-title text-primary">Read Our</span>
                    <h2 class="title mb-0">Latest Blog</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container blog-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="frontend/assets/images/blog/medium-size/1-1-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Lorem ipsum dolor consec adipisicing elit</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="frontend/assets/images/blog/medium-size/1-2-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Voluptate minus temporibus nostrum adipi</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog-item">
                                        <div class="blog-img img-zoom-effect">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="img-full" src="frontend/assets/images/blog/medium-size/1-3-370x315.jpg" alt="Blog Image">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta text-dim-gray pb-3">
                                                <ul>
                                                    <li class="date"><i class="fa fa-calendar-o me-2"></i>May 21, 2021</li>
                                                    <li>
                                                        <span class="comments me-3">
                                                        <a href="javascript:void(0)">2 Comments</a>
                                                    </span>
                                                        <span class="link-share">
                                                        <a href="javascript:void(0)">Share</a>
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h5 class="title mb-4">
                                                <a href="blog-detail-left-sidebar.html">Corporis tempora molestiae nulla esse ipsam</a>
                                            </h5>
                                            <p class="short-desc mb-5">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididunt ut labore gthydolore magna aliqua.</p>
                                            <div class="button-wrap">
                                                <a class="btn btn-custom-size btn-dark btn-lg rounded-0" href="blog-detail-left-sidebar.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End Here -->

        <!-- Begin Footer Area -->
        <div class="footer-area">
            <div class="footer-top section-space-y-axis-100 text-black" data-bg-color="#e5ddcc">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget-item">
                                <div class="footer-logo pb-4">
                                    <a href="index.html">
                                        <img src="{{asset('frontend/assets/images/logo/dark.png')}}" alt="Logo">
                                    </a>
                                </div>
                                <p class="short-desc mb-2">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor incididun ut labore gthydolore. </p>
                                <div class="widget-contact-info pb-6">
                                    <ul>
                                        <li>
                                            <i class="pe-7s-map-marker"></i>
                                            184 Main Rd E, St Albans VIC 3021,
                                        </li>
                                        <li>
                                            <i class="pe-7s-mail"></i>
                                            <a href="mailto://info@example.com">info@example.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="payment-method">
                                    <a href="javascript:void(0)">
                                        <img src="{{asset('frontend/assets/images/payment/1.png')}}" alt="Payment Method">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-6 pt-10 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Information</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <a href="javascript:void(0)">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Shipping</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Returns</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Order Status</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Gift Card Balance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Accessibility</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 offset-lg-1 col-md-6 pt-10 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">My Account</h3>
                                <ul class="widget-list-item">
                                    <li>
                                        <a href="javascript:void(0)">My Account</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Validation</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Terms of Use</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 pt-10 pt-lg-0">
                            <div class="widget-item">
                                <h3 class="widget-title mb-5">Newsletters</h3>
                                <p class="short-desc">Lorem ipsum dolor sit amet, consectet adipi elit, sed do eius tempor.</p>
                            </div>
                            <div class="widget-form-area">
                                <form class="widget-form" action="#">
                                    <input class="input-field" type="email" autocomplete="off" placeholder="Your Email">
                                    <div class="button-wrap pt-5">
                                        <button class="btn btn-custom-size btn-primary btn-secondary-hover rounded-0" id="mc-submit">Send Mail</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3" data-bg-color="#bac34e">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span class="copyright-text text-white">© 2022 Harmic Made with <i class="fa fa-heart text-danger"></i> by  <a href="https://hasthemes.com/" target="_blank">HasThemes</a> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End Here -->

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    <!-- Global Vendor, plugins JS -->

    <!-- JS Files
    ============================================ -->
    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <script src="{{asset('frontend/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendor/jquery.waypoints.js')}}"></script>

    <!--Plugins JS-->
    <script src="{{asset('frontend/assets/js/plugins/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/jquery.nice-select.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>

    <!--Main JS (Common Activation Codes)-->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>