@extends('user.layouts.app')
@section('content')
<!-- Slider -->
<div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
            <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="{{asset ('assets/user/images/slider/Slideshow_Electronics1.jpg') }}" src="{{asset ('assets/user/images/slider/Slideshow_Electronics1.jpg') }}" alt="fashion-slideshow-01">
                            <div class="box-content">
                                <div class="container">
                                    <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                                    <h1 class="fade-item fade-item-2">Savings for<br> dads and grads.</h1>
                                    <a href="shop-default.html" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="{{asset ('assets/user/images/slider/Slideshow_Electronics2.jpg') }}" src="{{asset ('assets/user/images/slider/Slideshow_Electronics2.jpg') }}" alt="fashion-slideshow-01">
                            <div class="box-content">
                                <div class="container">
                                    <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                                    <h1 class="fade-item fade-item-2">Modern design</h1>
                                    <a href="shop-default.html" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="{{asset ('assets/user/images/slider/Slideshow_Electronics3.jpg') }}" src="{{asset ('assets/user/images/slider/Slideshow_Electronics3.jpg') }}" alt="fashion-slideshow-01">
                            <div class="box-content">
                                <div class="container">
                                    <p class="fade-item fade-item-1">UP TO 40% OFF CHARGERS AND MORE.</p>
                                    <h1 class="fade-item fade-item-2">Fast charging</h1>
                                    <a href="shop-default.html" class="fade-item fade-item-3 rounded-full tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-pagination sw-absolute-2">
                <div class="container">
                    <div class="sw-dots sw-pagination-slider justify-content-center"></div>
                </div>
            </div>
        </div>
        <!-- /Slider -->
        <!-- Marquee -->
        <div class="tf-marquee marquee-sm bg_primary not-hover">
            <div class="wrap-marquee">
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">LIMITED TIME OFFER: FASHION SALE YOU CAN'T RESIST</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">FREE SHIPPING AND RETURN</p>
                </div>
                <div class="marquee-item">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="7" height="6" viewBox="0 0 7 6" fill="none"><path d="M3.5 0L6.53109 5.25H0.468911L3.5 0Z" fill="black"></path></svg>
                    </div>
                    <p class="text text-uppercase fw-6">NEW SEASON, NEW STYLES: FASHION SALE YOU CAN'T MISS</p>
                </div>
            </div>
                      
        </div>
        <!-- /Marquee -->
        <!-- category -->
        <section class="flat-spacing-11 pb-0">
            <div class="container">
                <div class="position-relative">
                    <div class="flat-title flex-row justify-content-between px-0">
                        <span class="title wow fadeInUp" data-wow-delay="0s">Shop by category.</span>
                    </div>
                    <div class="sw-pagination-wrapper">
                        <div dir="ltr" class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item-v2 type-small hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style radius-10">
                                                <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-1.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-1.jpg') }}" alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top">
                                                    <h5 class="heading fw-5">Screen protection</h5>
                                                    <p class="subheading">6 items</span></p>
                                                </div>
                                                <div class="bottom">
                                                    <button class="tf-btn collection-title hover-icon btn-light rounded-full"><span>Shop now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item-v2 type-small hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style radius-10">
                                                <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-2.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-2.jpg') }}" alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top">
                                                    <h5 class="heading fw-5">Headphone</h5>
                                                    <p class="subheading">6 items</span></p>
                                                </div>
                                                <div class="bottom">
                                                    <button class="tf-btn collection-title hover-icon btn-light rounded-full"><span>Shop now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item-v2 type-small hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style radius-10">
                                                <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-3.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-3.jpg') }}" alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top">
                                                    <h5 class="heading fw-5">Cables</h5>
                                                    <p class="subheading">6 items</span></p>
                                                </div>
                                                <div class="bottom">
                                                    <button class="tf-btn collection-title hover-icon btn-light rounded-full"><span>Shop now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item-v2 type-small hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style radius-10">
                                                <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-4.png') }}" src="{{asset ('assets/user/images/collections/electronic-4.png') }}" alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top">
                                                    <h5 class="heading fw-5">Adapters</h5>
                                                    <p class="subheading">6 items</span></p>
                                                </div>
                                                <div class="bottom">
                                                    <button class="tf-btn collection-title hover-icon btn-light rounded-full"><span>Shop now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide" lazy="true">
                                    <div class="collection-item-v2 type-small hover-img">
                                        <a href="shop-collection-sub.html" class="collection-inner">
                                            <div class="collection-image img-style radius-10">
                                                <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-5.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-5.jpg') }}" alt="collection-img">
                                            </div>
                                            <div class="collection-content">
                                                <div class="top">
                                                    <h5 class="heading fw-5">Docks and hubs.</h5>
                                                    <p class="subheading">6 items</span></p>
                                                </div>
                                                <div class="bottom">
                                                    <button class="tf-btn collection-title hover-icon btn-light rounded-full"><span>Shop now</span><i class="icon icon-arrow1-top-left"></i></button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-sw-navigation">
                            <div class="sw-dots style-2 medium sw-pagination-collection justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /category -->
        <!-- Banner Collection -->
        <section class="flat-spacing-8 pb_0">
            <div class="container">
                <div class="tf-banner-collection">
                    <img class="lazyload" data-src="{{asset ('assets/user/images/collections/banner-collection-3.jpg') }}" src="{{asset ('assets/user/images/collections/banner-collection-3.jpg') }}" alt="img-banner" loading="lazy">
                    <div class="box-content">
                        <div class="container wow fadeInUp" data-wow-delay="0s">
                            <div class="sub fw-7 text_white">SALE UP TO 30% OFF TODAY</div>
                            <h2 class="heading fw-6 text_white">Best Deals Discounts</h2>
                            <p class="text_white">Fast wireless charging on-the-go.</p>
                            <a href="shop-default.html" class="rounded-full tf-btn btn-primary-main style-3 fw-6 btn-light-icon animate-hover-btn"><span>Shop Collection</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Collection -->
        <!-- Collection -->
        <section class="flat-spacing-8 pb_0">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-recent" data-preview="2" data-tablet="2" data-mobile="1.3" data-space-lg="30" data-space-md="15" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v4 lg hover-img">
                                <div class="collection-inner">
                                    <a href="shop-collection-sub.html" class="radius-20 collection-image img-style">
                                        <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-6.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-6.jpg') }}" alt="collection-img">
                                    </a>
                                    <div class="collection-content wow fadeInUp" data-wow-delay="0s">
                                        <p class="subheading">HOT ACCESSORIES</p>
                                        <h5 class="heading fw-6">Smart Assistant</h5>
                                        <a href="shop-collection-sub.html" class="rounded-full tf-btn btn-primary-main style-3 fw-6 btn-light-icon animate-hover-btn"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v4 lg hover-img">
                                <div class="collection-inner">
                                    <a href="shop-collection-sub.html" class="radius-20 collection-image img-style">
                                        <img class="lazyload" data-src="{{asset ('assets/user/images/collections/electronic-7.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-7.jpg') }}" alt="collection-img">
                                    </a>
                                    <div class="collection-content wow fadeInUp" data-wow-delay="0s">
                                        <p class="subheading">FAST AND FREE SHIPPING</p>
                                        <h5 class="heading fw-6">True Earbuds</h5>
                                        <a href="shop-collection-sub.html" class="rounded-full tf-btn btn-primary-main style-3 fw-6 btn-light-icon animate-hover-btn"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Collection -->
        <!-- Shop Collection -->
        <section class="flat-spacing-8 pb_0">
            <div class="container">
                <div class="tf-grid-layout gap-0 md-col-2 bg_primary tf-img-with-text style-5">
                    <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s">
                        <img class="lazyload" data-src="{{asset ('assets/user/images/collections/collection-72.jpg') }}" src="{{asset ('assets/user/images/collections/collection-72.jpg') }}" alt="collection-img">
                    </div>
                    <div class="tf-content-wrap wow fadeInUp" data-wow-delay="0s">
                        <div class="sub-heading fw-7">ULTIMATE APPLE ACCESSORY.</div>
                        <div class="heading">60% Discount</div>
                        <p class="description text_black-2">Find the latest and greatest gadgets to enhance your electronic devices.

                        </p>
                        <div class="count-down">
                            <div class="description"><strong>Hungry up ! </strong>Deals end in :</div>
                            <div class="tf-countdown-v2">
                                <div class="js-countdown" data-timer="8007500" data-labels="Days,Hours,Mins,Secs"></div>
                            </div>
                        </div>
                        <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill rounded-full animate-hover-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Shop Collection -->
        <!-- Products -->
        <section class="flat-spacing-19">
            <div class="container">
                <div class="flat-title flex-row justify-content-between px-0">
                    <span class="title wow fadeInUp" data-wow-delay="0s">Trending Products</span>
                    <div class="box-sw-navigation">
                        <div class="nav-sw square nav-next-slider nav-next-sell-1"><span class="icon icon-arrow1-left"></span></div>
                        <div class="nav-sw square nav-prev-slider nav-prev-sell-1"><span class="icon icon-arrow1-right"></span></div>
                    </div>
                </div>
                <div class="hover-sw-nav hover-sw-2">
                    <div dir="ltr" class="swiper tf-sw-product-sell-1 wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide height-auto" lazy="true">
                                <div class="card-product overflow-hidden bg_white radius-20 border-line h-100">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" src="{{asset ('assets/user/images/collections/electronic-8.png') }}" data-src="{{asset ('assets/user/images/collections/electronic-8.png') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{asset ('assets/user/images/collections/electronic-9.jpg') }}" src="{{asset ('assets/user/images/collections/electronic-9.jpg') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info has-padding">
                                        <a href="product-detail.html" class="title link">UltraGlass 2 Treated Screen Protector for iPhone 15 Pro</a>
                                        <span class="price">$39.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto" lazy="true">
                                <div class="card-product overflow-hidden bg_white radius-20 border-line h-100">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" src="{{asset ('assets/user/images/collections/electronic-10.png') }}" data-src="{{asset ('assets/user/images/collections/electronic-10.png' ) }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{asset ('assets/user/images/collections/electronic-11.png') }}" src="{{asset ('assets/user/images/collections/electronic-11.png') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info has-padding">
                                        <a href="product-detail.html" class="title link">Smart Light Switch with Thread</a>
                                        <span class="price">$49.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto" lazy="true">
                                <div class="card-product overflow-hidden bg_white radius-20 border-line h-100">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" src="{{asset ('assets/user/images/collections/electronic-12.png') }}" data-src="{{asset ('assets/user/images/collections/electronic-12.png') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/collections/electronic-13.png" src="images/collections/electronic-13.png" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info has-padding">
                                        <a href="product-detail.html" class="title link">SoundForm Rise</a>
                                        <span class="price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price SoundForm Rise">$79.99</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto" lazy="true">
                                <div class="card-product overflow-hidden bg_white radius-20 border-line h-100">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" src="{{asset ('assets/user/images/collections/electronic-14.png') }}" data-src="{{asset ('assets/user/images/collections/electronic-14.png') }}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{asset ('assets/user/images/collections/electronic-15.png') }}" src="{{asset ('assets/user/images/collections/electronic-15.png') }}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info has-padding">
                                        <a href="product-detail.html" class="title link">Wireless On-Ear Headphones for Kids</a>
                                        <span class="price">
                                            <span class="old-price">$34.99</span>
                                            <span class="new-price SoundForm Rise">$24.99</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto" lazy="true">
                                <div class="card-product overflow-hidden bg_white radius-20 border-line h-100">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" src="images/collections/electronic-16.jpg" data-src="images/collections/electronic-16.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/collections/electronic-17.jpg" src="images/collections/electronic-17.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info has-padding">
                                        <a href="product-detail.html" class="title link">3-in-1 Wireless Charger with Official MagSafe Charging 15W</a>
                                        <span class="price">
                                            <span class="old-price">$149.99</span>
                                            <span class="new-price SoundForm Rise">$127.49</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto" lazy="true">
                                <div class="card-product overflow-hidden bg_white radius-20 border-line h-100">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" src="images/collections/electronic-18.jpg" data-src="images/collections/electronic-18.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/collections/electronic-19.jpg" src="images/collections/electronic-19.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info has-padding">
                                        <a href="product-detail.html" class="title link">3-in-1 Wireless Charger for Apple Devices</a>
                                        <span class="price">$119.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Products -->
        <!-- Testimonial -->
        <section class="flat-spacing-18 flat-testimonial bg_grey-7">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Happy Clients</span>
                    <p class="sub-title">See what our satisfied customers have to say about our electronic accessories.</p>
                </div>
                <div class="wrap-carousel">
                    <div dir="ltr" class="swiper tf-sw-testimonial" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="15">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide height-auto">
                                <div class="testimonial-item h-100 bg_white style-column wow fadeInUp" data-wow-delay="0s">
                                    <div class="rating">
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                    </div>
                                    <div class="heading">Best Online Fashion Site</div>
                                    <div class="text">
                                        “ I always find something stylish and affordable on this web fashion site ”
                                    </div>
                                    <div class="author">
                                        <div class="name">Robert smith</div>
                                        <div class="metas">Customer from USA</div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="lazyload" data-src="images/collections/electronic-16.jpg" src="images/collections/electronic-16.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="product-detail.html">3-in-1 Wireless Charger with Official MagSafe Charging 15W</a>
                                            </div>
                                            <div class="price">$105.95</div>
                                        </div>
                                        <a href="product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto">
                                <div class="testimonial-item h-100 bg_white style-column wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rating">
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                    </div>
                                    <div class="heading">Great Selection and Quality</div>
                                    <div class="text">
                                        "I love the variety of styles and the high-quality clothing on this web fashion site."
                                    </div>
                                    <div class="author">
                                        <div class="name">Allen Lyn</div>
                                        <div class="metas">Customer from France</span></div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="lazyload" data-src="images/collections/electronic-12.png" src="images/collections/electronic-12.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="product-detail.html">SoundForm Rise</a>
                                            </div>
                                            <div class="price">$7.95</div>
                                        </div>
                                        <a href="product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto">
                                <div class="testimonial-item h-100 bg_white style-column wow fadeInUp" data-wow-delay=".2s">
                                    <div class="rating">
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                    </div>
                                    <div class="heading">Best Customer Service</div>
                                    <div class="text">
                                        "I finally found a web fashion site with stylish and flattering options in my size."
                                    </div>
                                    <div class="author">
                                        <div class="name">Peter Rope</div>
                                        <div class="metas">Customer from USA</div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="lazyload" data-src="images/collections/electronic-8.png" src="images/collections/electronic-8.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="product-detail.html">UltraGlass 2 Treated Screen Protector for iPhone 15 Pro</a>
                                            </div>
                                            <div class="price">From $18.95</div>
                                        </div>
                                        <a href="product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide height-auto">
                                <div class="testimonial-item h-100 bg_white style-column wow fadeInUp" data-wow-delay=".3s">
                                    <div class="rating">
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                        <i class="icon-start text_primary"></i>
                                    </div>
                                    <div class="heading">Great Selection and Quality</div>
                                    <div class="text">
                                        "I love the variety of styles and the high-quality clothing on this web fashion site."
                                    </div>
                                    <div class="author">
                                        <div class="name">Hellen Ase</div>
                                        <div class="metas">Customer from Japan</span></div>
                                    </div>
                                    <div class="product">
                                        <div class="image">
                                            <a href="product-detail.html">
                                                <img class="lazyload" data-src="images/collections/electronic-10.png" src="images/collections/electronic-10.png" alt="">
                                            </a>
                                        </div>
                                        <div class="content-wrap">
                                            <div class="product-title">
                                                <a href="product-detail.html">3-in-1 Wireless Charger with Official MagSafe Charging 15W</a>
                                            </div>
                                            <div class="price">$16.95</div>
                                        </div>
                                        <a href="product-detail.html" class=""><i class="icon-arrow1-top-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-testimonial lg"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-testimonial lg"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-testimonial justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- Blogs post -->
        <section class="flat-spacing-14">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Blogs post</span>
                </div>
                <div class="hover-sw-nav view-default hover-sw-3">
                    <div dir="ltr" class="swiper tf-sw-product-sell" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay="0s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/electronic-1.jpg" src="images/blog/electronic-1.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html" class="tf-btn btn-sm animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Pop-punk is back in fashion</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".1s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/electronic-2.jpg" src="images/blog/electronic-2.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html" class="tf-btn btn-sm animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/electronic-3.jpg" src="images/blog/electronic-3.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html" class="tf-btn btn-sm animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">An Exclusive Clothing Collaboration</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/electronic-4.jpg" src="images/blog/electronic-4.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html" class="tf-btn btn-sm animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/electronic-5.jpg" src="images/blog/electronic-5.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html" class="tf-btn btn-sm animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="images/blog/electronic-6.jpg" src="images/blog/electronic-6.jpg" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html" class="tf-btn btn-sm animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Blogs post -->
        <!-- Icon box -->
        <section class="flat-spacing-1 flat-iconbox bg_grey-7 wow fadeInUp" data-wow-delay="0s">
            <div class="container">
                <div class="wrap-carousel wrap-mobile">
                    <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                        <div class="swiper-wrapper wrap-iconbox">
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon bg_white">
                                        <i class="icon-shipping"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Free Shipping</div>
                                        <p>Free shipping over order $120</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon bg_white">
                                        <i class="icon-payment fs-22"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Flexible Payment</div>
                                        <p>Pay with Multiple Credit Cards</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon bg_white">
                                        <i class="icon-return fs-20"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">14 Day Returns</div>
                                        <p>Within 30 days for an exchange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon bg_white">
                                        <i class="icon-suport"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Premium Support</div>
                                        <p>Outstanding premium support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Icon box -->
@endsection
