@extends('index')
@section('container')

<!-- Begin Slider Area -->
<div class="slider-area">

    <!-- Main Slider -->
    <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
        <div class="swiper-wrapper">
            <div class="swiper-slide animation-style-02 slide-style-2">
                <div class="slide-inner bg-height py-6 py-lg-0" data-bg-image="{{ asset('motoconexion/assets/images/slider/bg/2-1.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center order-2 order-lg-1">
                                <div class="slide-content text-night-rider">
                                    <h2 class="title mb-4">Car Spare & Parts <br> Up To 30% Off</h2>
                                    <p class="short-desc mb-10">30% Off All Items For First Sales</p>
                                    <div class="button-wrap pb-2 pb-md-0">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                <div class="inner-img">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="{{ asset('motoconexion/assets/images/slider/inner-img/2-1-654x444.png')}}" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide animation-style-02 slide-style-2">
                <div class="slide-inner bg-height py-6 py-lg-0" data-bg-image="{{ asset('motoconexion/assets/images/slider/bg/2-1.jpg')}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 align-self-center order-2 order-lg-1">
                                <div class="slide-content text-night-rider">
                                    <h2 class="title mb-4">Car Spare & Parts <br> Up To 30% Off</h2>
                                    <p class="short-desc mb-10">30% Off All Items For First Sales</p>
                                    <div class="button-wrap pb-2 pb-md-0">
                                        <a class="btn btn-custom-size lg-size btn-primary" href="shop.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                <div class="inner-img">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="{{ asset('motoconexion/assets/images/slider/inner-img/2-2-654x444.png')}}" alt="Inner Image">
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

        <!-- Custom Arrows -->
        <div class="custom-arrow-wrap d-none d-md-block">
            <div class="custom-button-prev"></div>
            <div class="custom-button-next"></div>
        </div>
    </div>

</div>
<!-- Slider Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="section-title style-2 pb-55">
            <h2 class="title mb-0">Top Category</h2>
        </div>
        <div class="row">
            <div class="product-custom-col col-12">
                <div class="product-category-item">
                    <a class="product-category-img img-zoom-effect" href="shop.html">
                        <img src="{{ asset('motoconexion/assets/images/product/top-category/1-1-180x180.png')}}" alt="Top Category">
                    </a>
                    <div class="product-category-content pt-5">
                        <h2 class="title">
                            <a href="shop.html">Tail Light</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="product-custom-col col-12">
                <div class="product-category-item">
                    <a class="product-category-img img-zoom-effect" href="shop.html">
                        <img src="{{ asset('motoconexion/assets/images/product/top-category/1-2-180x180.png')}}" alt="Top Category">
                    </a>
                    <div class="product-category-content pt-5">
                        <h2 class="title">
                            <a href="shop.html">Wiper Blades</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="product-custom-col col-12 pt-4 pt-sm-0">
                <div class="product-category-item">
                    <a class="product-category-img img-zoom-effect" href="shop.html">
                        <img src="{{ asset('motoconexion/assets/images/product/top-category/1-3-180x180.png')}}" alt="Top Category">
                    </a>
                    <div class="product-category-content pt-5">
                        <h2 class="title">
                            <a href="shop.html">Suspension</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="product-custom-col col-12 pt-4 pt-lg-0">
                <div class="product-category-item">
                    <a class="product-category-img img-zoom-effect" href="shop.html">
                        <img src="{{ asset('motoconexion/assets/images/product/top-category/1-4-180x180.png')}}" alt="Top Category">
                    </a>
                    <div class="product-category-content pt-5">
                        <h2 class="title">
                            <a href="shop.html">Air Filter</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="product-custom-col col-12 pt-4 pt-lg-0">
                <div class="product-category-item">
                    <a class="product-category-img img-zoom-effect" href="shop.html">
                        <img src="{{ asset('motoconexion/assets/images/product/top-category/1-5-180x180.png')}}" alt="Top Category">
                    </a>
                    <div class="product-category-content pt-5">
                        <h2 class="title">
                            <a href="shop.html">Car Brakes</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="product-custom-col col-12 pt-4 pt-lg-0">
                <div class="product-category-item">
                    <a class="product-category-img img-zoom-effect" href="shop.html">
                        <img src="{{ asset('motoconexion/assets/images/product/top-category/1-6-180x180.png')}}" alt="Top Category">
                    </a>
                    <div class="product-category-content pt-5">
                        <h2 class="title">
                            <a href="shop.html">Pistons Liners</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<div class="banner-area banner-style-3 section-space-top-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-md-8 pt-lg-0">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('motoconexion/assets/images/banner/2-1-620x257.jpg')}}" alt="Banner Image">
                        <div class="inner-content text-white">
                            <h3 class="offer">From $96</h3>
                            <h2 class="title">Latest <br> Car Wheel</h2>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-8 pt-lg-0">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('motoconexion/assets/images/banner/2-2-620x257.jpg')}}" alt="Banner Image">
                        <div class="inner-content text-white">
                            <h3 class="offer">From $96</h3>
                            <h2 class="title">Latest <br> Car Wheel</h2>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-8">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('motoconexion/assets/images/banner/2-3-620x257.jpg')}}" alt="Banner Image">
                        <div class="inner-content text-right text-night-rider">
                            <h3 class="offer">From $96</h3>
                            <h2 class="title">Latest <br> Car Wheel</h2>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-8">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img img-zoom-effect">
                        <img class="img-full" src="{{ asset('motoconexion/assets/images/banner/2-4-620x257.jpg')}}" alt="Banner Image">
                        <div class="inner-content text-right text-night-rider">
                            <h3 class="offer">From $96</h3>
                            <h2 class="title">Latest <br> Car Wheel</h2>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-primary" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Begin Product Area -->
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="section-title style-2 pb-55">
            <h2 class="title mb-0">SPECIAL DEALS</h2>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="product-banner img-hover-effect">
                    <div class="product-banner-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/special-deals/banner/2-1-290x350.jpg')}}" alt="Product Banner">
                        </a>
                        <div class="product-banner-content text-white">
                            <h2 class="offer mb-4">Have a Special <br> Discount</h2>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size btn-white btn-hover-primary" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="special-deals-button-wrap pt-10">
                            <div class="special-deals-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="special-deals-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 pt-6 pt-lg-0">
                <div class="swiper-container special-deals-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-item special-deals-item">
                            <div class="product-img img-zoom-effect">
                                <a href="shop.html">
                                    <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/special-deals/2-1-290x350.jpg')}}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <a class="product-name pb-1" href="shop.html">Fuel Injector</a>
                                <div class="price-box">
                                    <div class="price-box-holder">
                                        <span>Price:</span>
                                        <span class="new-price text-primary">$130.00</span>
                                    </div>
                                </div>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item special-deals-item">
                            <div class="product-img img-zoom-effect">
                                <a href="shop.html">
                                    <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/special-deals/2-2-290x350.jpg')}}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <a class="product-name pb-1" href="shop.html">A/C Compressor</a>
                                <div class="price-box">
                                    <div class="price-box-holder">
                                        <span>Price:</span>
                                        <span class="new-price text-primary">$150.00</span>
                                    </div>
                                </div>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item special-deals-item">
                            <div class="product-img img-zoom-effect">
                                <a href="shop.html">
                                    <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/special-deals/2-3-290x350.jpg')}}" alt="Product Images">
                                </a>
                            </div>
                            <div class="product-content">
                                <a class="product-name pb-1" href="shop.html">Shock Absorbers</a>
                                <div class="price-box">
                                    <div class="price-box-holder">
                                        <span>Price:</span>
                                        <span class="new-price text-primary">$120.00</span>
                                    </div>
                                </div>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-shuffle"></i>
                                            </a>
                                        </li>
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
<!-- Product Area End Here -->

<!-- Begin Shipping Area -->
<div class="shipping-area section-space-top-100">
    <div class="container">
        <div class="shipping-bg" data-bg-image="{{ asset('motoconexion/assets/images/shipping/bg/1-1-1280x202.jpg')}}">
            <div class="row shipping-wrap py-5 py-xl-0">
                <div class="col-lg-4">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="{{ asset('motoconexion/assets/images/shipping/icon/plane.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h2 class="title">Free Shipping</h2>
                            <p class="short-desc mb-0">Provide free home delivery for all product over $100</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="{{ asset('motoconexion/assets/images/shipping/icon/earphones.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h2 class="title">Online Support</h2>
                            <p class="short-desc mb-0">To satisfy our customer we try to give support online</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4 pt-lg-0">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="{{ asset('motoconexion/assets/images/shipping/icon/shield.png')}}" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h2 class="title">Secure Payment</h2>
                            <p class="short-desc mb-0">We ensure our product Good quality all times</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shipping Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-y-axis-100">
    <div class="container">
        <div class="section-title style-2 pb-55">
            <h2 class="title mb-0">New Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-1-620x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">Auto Clutch & Brake</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$120.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-8 pt-lg-0">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-2-290x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">Fuel Injector</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$130.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-8 pt-lg-0">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-3-290x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">A/C Compressor</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$150.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-8">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-4-290x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">Shock Absorbers</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$180.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-8">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-5-290x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">Catalytic Converter</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$200.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-8">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-6-290x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">Tire Pressure Gauge</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$220.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-8">
                <div class="product-item new-product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="shop.html">
                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/medium-size/new-product/1-7-290x350.jpg')}}" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <a class="product-name pb-1" href="shop.html">Power Steering Fluid</a>
                        <div class="price-box">
                            <div class="price-box-holder">
                                <span>Price:</span>
                                <span class="new-price text-primary">$230.00</span>
                            </div>
                        </div>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" data-tippy="Add to compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Brand Area -->
<div class="brand-area">
    <div class="container">
        <div class="brand-nav">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container brand-slider-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="{{ asset('motoconexion/assets/images/brand/1-1.png')}}" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="{{ asset('motoconexion/assets/images/brand/1-2.png')}}" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="{{ asset('motoconexion/assets/images/brand/1-3.png')}}" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="{{ asset('motoconexion/assets/images/brand/1-4.png')}}" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="{{ asset('motoconexion/assets/images/brand/1-5.png')}}" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="{{ asset('motoconexion/assets/images/brand/1-6.png')}}" alt="Brand Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End Here -->

<!-- Begin Blog Area -->
<div class="blog-area section-space-y-axis-100">
    <div class="container">
        <div class="section-title style-2 pb-55">
            <h2 class="title mb-0">Latest Blog</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container blog-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-img img-hover-effect">
                                    <a class="img-zoom-effect" href="blog.html">
                                        <img class="img-full" src="{{ asset('motoconexion/assets/images/blog/medium-size/1-1-400x250.jpg')}}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content pt-6">
                                    <div class="blog-meta text-paynes-grey pb-1">
                                        <ul>
                                            <li class="author">
                                                <a href="#">
                                                    <i class="pe-7s-user"></i>
                                                    BY: ADMIN
                                                </a>
                                            </li>
                                            <li class="date">
                                                <i class="pe-7s-date"></i>
                                                27 FEB 2021
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="mb-3">
                                        <a class="title" href="blog.html">Lorem ipsum dolor sit ametco</a>
                                    </h2>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam quis nostrud</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-img img-hover-effect">
                                    <a class="img-zoom-effect" href="blog.html">
                                        <img class="img-full" src="{{ asset('motoconexion/assets/images/blog/medium-size/1-2-400x250.jpg')}}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content pt-6">
                                    <div class="blog-meta text-paynes-grey pb-1">
                                        <ul>
                                            <li class="author">
                                                <a href="#">
                                                    <i class="pe-7s-user"></i>
                                                    BY: ADMIN
                                                </a>
                                            </li>
                                            <li class="date">
                                                <i class="pe-7s-date"></i>
                                                27 FEB 2021
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="mb-3">
                                        <a class="title" href="blog.html">Vivamus blandit gravida</a>
                                    </h2>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam quis nostrud</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-img img-hover-effect">
                                    <a class="img-zoom-effect" href="blog.html">
                                        <img class="img-full" src="{{ asset('motoconexion/assets/images/blog/medium-size/1-3-400x250.jpg')}}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content pt-6">
                                    <div class="blog-meta text-paynes-grey pb-1">
                                        <ul>
                                            <li class="author">
                                                <a href="#">
                                                    <i class="pe-7s-user"></i>
                                                    BY: ADMIN
                                                </a>
                                            </li>
                                            <li class="date">
                                                <i class="pe-7s-date"></i>
                                                27 FEB 2021
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="mb-3">
                                        <a class="title" href="blog.html">Pellentesque molestie ligula</a>
                                    </h2>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmod tempor incididunt ut labore et dolore magna ali Ut enim ad minim veniam quis nostrud</p>
                                    <div class="button-wrap">
                                        <a class="btn btn-custom-size btn-matterhorn" href="blog.html">Read More</a>
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

<!-- Begin Modal Area -->
<div class="modal quick-view-modal fade" id="quickModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-wrap row">
                    <div class="col-lg-6">
                        <div class="modal-img">
                            <div class="swiper-container modal-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-1-618x578.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-2-618x578.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-3-618x578.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-4-618x578.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-5-618x578.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="single-img">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-6-618x578.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbs-arrow-holder">
                                <div class="swiper-container modal-thumbs">
                                    <div class="swiper-wrapper">
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-1-618x578.jpg')}}" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-2-618x578.jpg')}}" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-3-618x578.jpg')}}" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-4-618x578.jpg')}}" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-5-618x578.jpg')}}" alt="Product Thumnail">
                                        </a>
                                        <a href="#" class="swiper-slide">
                                            <img class="img-full" src="{{ asset('motoconexion/assets/images/product/large-size/2-6-618x578.jpg')}}" alt="Product Thumnail">
                                        </a>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="thumbs-button-wrap d-none d-md-block">
                                    <div class="thumbs-button-prev">
                                        <i class="pe-7s-angle-left"></i>
                                    </div>
                                    <div class="thumbs-button-next">
                                        <i class="pe-7s-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-9 pt-lg-0">
                        <div class="single-product-content">
                            <h2 class="title mb-3">Auto Clutch & Brake</h2>
                            <div class="price-box pb-3">
                                <span class="new-price text-danger">$440.00</span>
                            </div>
                            <div class="rating-box-wrap pb-55">
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="review-status ps-4">
                                    <a href="#">( 5 Customer Review )</a>
                                </div>
                            </div>
                            <div class="selector-wrap color-option">
                                <span class="selector-title border-bottom-0">Color</span>
                                <select class="nice-select wide border-bottom-0 rounded-0">
                                    <option value="default">Dark Black With Shadow</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                    <option value="red">Red</option>
                                </select>
                            </div>
                            <div class="selector-wrap pb-55">
                                <span class="selector-title">Size</span>
                                <select class="nice-select wide rounded-0">
                                    <option value="medium">Medium Size With Screw</option>
                                    <option value="large">Large Size With Screw</option>
                                    <option value="small">Small Size With Screw</option>
                                </select>
                            </div>
                            <p class="short-desc mb-9">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore</p>
                            <ul class="quantity-with-btn pb-9">
                                <li class="quantity">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                    </div>
                                </li>
                                <li class="add-to-cart">
                                    <a class="btn btn-custom-size lg-size btn-primary" href="cart.html">Add to cart</a>
                                </li>
                                <li class="wishlist-btn-wrap">
                                    <a class="custom-circle-btn" href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                                <li class="compare-btn-wrap">
                                    <a class="custom-circle-btn" href="compare.html">
                                        <i class="pe-7s-refresh-2"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="product-category pb-3">
                                <span class="title">SKU:</span>
                                <ul>
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category pb-3">
                                <span class="title">Categories :</span>
                                <ul>
                                    <li>
                                        <a href="#">Office,</a>
                                    </li>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category product-tags pb-3">
                                <span class="title">Tags :</span>
                                <ul>
                                    <li>
                                        <a href="#">Furniture</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-category social-link align-items-center pb-lg-8">
                                <span class="title pe-3">Share:</span>
                                <ul>
                                    <li>
                                        <a href="#" data-tippy="Pinterest" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Tumblr" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-tumblr"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-tippy="Dribbble" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Area End Here -->
    
@endsection