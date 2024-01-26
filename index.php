<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from eazzy.me/html/bella-watch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 May 2016 19:21:34 GMT -->
<head>
       <?php
         include "header.inc";
       ?>
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div id="preloader-status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <div id="preloader-title">Loading</div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- Popup: Shopping cart items -->
            <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="container">
                        <div class="cart-items">
                            <div class="cart-items-inner">
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object item-image" src="assets/img/preview/shop/order-1s.jpg" alt=""></a>
                                    <p class="pull-right item-price">$450.00</p>
                                    <div class="media-body">
                                        <h4 class="media-heading item-title"><a href="#">1x Standard Product</a></h4>
                                        <p class="item-desc">Lorem ipsum dolor</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <p class="pull-right item-price">$450.00</p>
                                    <div class="media-body">
                                        <h4 class="media-heading item-title summary">Subtotal</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <a href="#" class="btn btn-theme btn-theme-dark" data-dismiss="modal">Close</a><!--
                                            --><a href="shopping-cart.html" class="btn btn-theme btn-theme-transparent btn-call-checkout">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Popup: Shopping cart items -->

            <!-- Header top bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-left">
                        <ul class="list-inline">
                            <li class="icon-user"><a href="login.html"><img src="assets/img/icon-1.png" alt=""/> <span>Login</span></a></li>
                            <li class="icon-form"><a href="login.html"><img src="assets/img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
                            <li><a href="mailto:support@yourdomain.com"><i class="fa fa-envelope"></i> <span>support@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="list-inline">
                            <li class="hidden-xs"><a href="about.html">About</a></li>
                            <li class="hidden-xs"><a href="blog.html">Blog</a></li>                         
                            <li class="hidden-xs"><a href="accountinformation.html">My Account</a></li>
                            <li class="hidden-xs"><a href="contact.html">Contact</a></li>
                            <li class="hidden-xs"><a href="faq.html">FAQ</a></li>
                            <li class="hidden-xs"><a href="wishlist.html">My Wishlist</a></li>
                            <li class="dropdown currency">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">€ EURO<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">€ EURO</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                    <li><a href="#">€ EURO</a></li>
                                </ul>
                            </li>
                            <li class="dropdown flags">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/flag.gif" alt=""/> Eng<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                                    <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                                    <li><a href="#"><img src="assets/img/flag.gif" alt=""/> Eng</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Header top bar -->

            <!-- HEADER -->
            <header class="header fixed">
                <div class="header-wrapper">
                    <div class="container">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index-2.html"><img src="assets/img/logo-bella-shop.png" alt="Bella Shop"/></a>
                        </div>
                        <!-- /Logo -->

                        <!-- Header search -->
                        <div class="header-search">
                            <input class="form-control" type="text" placeholder="What are you looking?"/>
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        <!-- /Header search -->

                        <!-- Header shopping cart -->
                        <div class="header-cart">
                            <div class="cart-wrapper">
                                <a href="wishlist.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                                <a href="compare-products.html" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a>
                                <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
                                <!-- Mobile menu toggle button -->
                                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                                <!-- /Mobile menu toggle button -->
                            </div>
                        </div>
                        <!-- Header shopping cart -->

                    </div>
                </div>
                <div class="navigation-wrapper">
                    <div class="container">
                        <!-- Navigation -->
                        <nav class="navigation closed clearfix">
                            <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                            <ul class="nav sf-menu">
                                <li class="active"><a href="index-2.html">Homepage</a>
                                    <ul>
                                        <li><a href="index-2.html">Homepage 1</a></li>
                                        <li><a href="index-3.html">Homepage 2</a></li>
                                        <li><a href="index-4.html">Homepage 3</a></li>
                                        <li><a href="index-5.html">Homepage 4</a></li>
                                        <li><a href="index-6.html">Homepage 5</a></li>
                                        <li><a href="index-7.html">Homepage 6</a></li>
                                        <li><a href="index-8.html">Homepage 7</a></li>
                                        <li><a href="index-9.html">Homepage 8</a></li>
                                        <li><a href="index-10.html">Homepage 9</a></li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Shop</a>
                                    <ul>
                                        <li><a href="category.html">Shop Sidebar Left</a></li>
                                        <li><a href="category-right.html">Shop Sidebar Right</a></li>
                                        <li><a href="category-list.html">Shop List View</a></li>
                                        <li><a href="product-details.html">Product Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Sidebar Left </a></li>
                                        <li><a href="blog-right.html">Blog Sidebar Right</a></li>
                                        <li><a href="blog-post.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio.html">Portfolio 3 columns</a></li>
                                        <li><a href="portfolio-4col.html">Portfolio 4 columns</a></li>
                                        <li><a href="portfolio-alt.html">Portfolio Alternate</a></li>
                                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu"><a href="#">Catalog</a>
                                    <ul>
                                        <li class="row">
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Watches</span></h4>
                                                <ul>
                                                    <li><a href="#">Luxury  Watches</a></li>
                                                    <li><a href="#">
                                                            Smart Watches</a></li>
                                                    <li><a href="#">Sports Watches</a></li>
                                                    <li><a href="#">Traditional Watches</a></li>
                                                    <li><a href="#">Round Watches</a></li>
                                                    <li><a href="#">Diamond Watches</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Watches Brands</span></h4>
                                                <ul>
                                                    <li><a href="#">Rolex</a></li>
                                                    <li><a href="#">Ulysse Nardins</a></li>
                                                    <li><a href="#">Blancpain</a></li>
                                                    <li><a href="#">Giarard Perregaux</a></li>
                                                    <li><a href="#">Jaeger-LeCoultre</a></li>
                                                    <li><a href="#">Audemars Piguet</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2">
                                                <h4 class="block-title"><span>Pages</span></h4>
                                                <ul>
                                                    <li><a href="shortcodes.html"><strong>Shortcodes</strong></a></li>
                                                    <li><a href="typography.html"><strong>Typography</strong></a></li>
                                                    <li><a href="coming-soon.html"><strong>Coming soon</strong></a></li>
                                                    <li><a href="error-page.html"><strong>404 Page</strong></a></li>
                                                    <li><a href="about.html"><strong>About</strong></a></li>
                                                    <li><a href="login.html"><strong>Login</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-2 visible-xs">
                                                <h4 class="block-title"><span>My Account</span></h4>
                                                <ul>
                                                    <li><a href="accountinformation.html"> Account Information </a></li>
                                                    <li><a href="myaccount.html">My Account</a></li>                                        
                                                    <li><a href="cng-pw.html">Change Password</a></li>
                                                    <li><a href="address-book.html">Address Books</a></li>
                                                    <li><a href="order-history.html">Order History</a></li>
                                                    <li><a href="review-rating.html">Reviews and Ratings</a></li>
                                                    <li><a href="return.html">Returns Requests</a></li>
                                                    <li><a href="newsletter.html">Newsletter</a></li>
                                                    <li><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="block-title"><span>Header styles</span></h4>
                                                <ul>
                                                    <li><a href="index-style-1.html"><strong>Header style 1</strong></a></li>
                                                    <li><a href="index-style-2.html"><strong>Header style 2</strong></a></li>
                                                    <li><a href="index-style-3.html"><strong>Header style 3</strong></a></li>
                                                    <li><a href="index-style-4.html"><strong>Header style 4</strong></a></li>
                                                    <li><a href="index-style-5.html"><strong>Header style 5</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="product-list">
                                                    <div class="media">
                                                        <a class="pull-left media-link" href="#">
                                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                            <div class="rating">
                                                                <span class="star"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span>
                                                            </div>
                                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a class="pull-left media-link" href="#">
                                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><a href="#">Standard Product Header</a></h4>
                                                            <div class="rating">
                                                                <span class="star"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span><!--
                                                                --><span class="star active"></span>
                                                            </div>
                                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="category.html">Men</a></li>
                                <li><a href="category.html">Women</a></li>
                                <li><a href="category.html">Kids</a></li>
                                <li><a href="category.html">New</a></li>
                                <li class="sale"><a href="category.html">Sale</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- /Navigation -->
                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            <div class="content-area">

                <!-- PAGE -->
                <section class="page-section no-padding-bottom">
                    <div class="container">

                        <div class="row main-slider-row">

                            <div class="col-md-9 slider">
                                <div class="main-slider">
                                    <div class="owl-carousel" id="main-slider">

                                        <!-- Slide 1 -->
                                        <div class="item slide1">
                                            <img class="slide-img" src="assets/img/preview/slider/slide-3-sub.jpg" alt=""/>
                                            <div class="caption">
                                                <div class="container">
                                                    <div class="div-table">
                                                        <div class="div-cell">
                                                            <div class="caption-content">
                                                                <h2 class="caption-title">The Biggest</h2>
                                                                <h3 class="caption-subtitle">Sale</h3>
                                                                <p class="caption-text">
                                                                    <a class="btn btn-theme" href="#">Shop Now</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Slide 1 -->

                                        <!-- Slide 2 -->
                                        <div class="item slide2 alt">
                                            <img class="slide-img" src="assets/img/preview/slider/slide-3-sub.jpg" alt=""/>
                                            <div class="caption">
                                                <div class="container">
                                                    <div class="div-table">
                                                        <div class="div-cell">
                                                            <div class="caption-content">
                                                                <h2 class="caption-title">New Arrivals On Sale</h2>
                                                                <h3 class="caption-subtitle"><span>Summer Collection</span></h3>
                                                                <div class="price">
                                                                    <span>$</span><ins>49</ins>
                                                                    <span>$</span><del>86</del>
                                                                </div>
                                                                <p class="caption-text">
                                                                    <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Slide 2 -->

                                        <!-- Slide 3 -->
                                        <div class="item slide3 dark">
                                            <img class="slide-img" src="assets/img/preview/slider/slide-3a-sub.jpg" alt=""/>
                                            <div class="caption">
                                                <div class="container">
                                                    <div class="div-table">
                                                        <div class="div-cell">
                                                            <div class="caption-content">
                                                                <h2 class="caption-title">New Arrivals On Sale</h2>
                                                                <h3 class="caption-subtitle"><span>Summer Collection</span></h3>
                                                                <p class="caption-text">
                                                                    <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Slide 3 -->

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 sidebar">
                                <!-- widget shop categories -->
                                <div class="widget shop-categories">
                                    <h4 class="widget-title">Categories</h4>
                                    <div class="widget-content">
                                        <ul>
                                            <li>
                                                <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Woman</a>
                                                <ul class="children">
                                                    <li>
                                                        <a href="#">Luxury  Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Smart Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sports Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Traditional Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Round Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Man</a>
                                                <ul class="children">
                                                    <li>
                                                        <a href="#">Luxury  Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Smart Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sports Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Traditional Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Round Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Watches Bands</a>
                                                <ul class="children active">
                                                    <li>
                                                        <a href="#">Rolex
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Ulysse Nardins
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blancpain
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Giarard Perregaux
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Jaeger-LeCoultre
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="arrow"><i class="fa fa-angle-down"></i></span>
                                                <a href="#">Top Sellers</a>
                                                <ul class="children">
                                                    <li>
                                                        <a href="#">Luxury  Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Smart Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sports Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Traditional Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Round Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="arrow"><i class="fa fa-angle-up"></i></span>
                                                <a href="#">Latest </a>
                                                <ul class="children">
                                                    <li>
                                                        <a href="#">Luxury  Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Smart Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Sports Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Traditional Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Round Watches
                                                            <span class="count">12</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Sale Off</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /widget shop categories -->
                            </div>

                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-1.jpg')"></div>
                                            <div class="caption">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <h2 class="caption-title"><span>Apple Watches</span></h2>
                                                        <h3 class="caption-sub-title"><span>Our most personal device yet.</span></h3>
                                                        <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                                    <div class="media">
                                        <a class="media-link" href="#">
                                            <div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-2.jpg')"></div>
                                            <div class="caption text-right">
                                                <div class="caption-wrapper div-table">
                                                    <div class="caption-inner div-cell">
                                                        <h2 class="caption-title"><span>Find your Rolex</span></h2>
                                                        <h3 class="caption-sub-title"><span>May we help you choose your Rolex?</span></h3>
                                                        <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">

                        <div class="tabs">
                            <ul id="tabs" class="nav nav-justified-off"><!--
                                --><li class=""><a href="#tab-1" data-toggle="tab">Featured</a></li><!--
                                --><li class="active"><a href="#tab-2" data-toggle="tab">Newest</a></li><!--
                                --><li class=""><a href="#tab-3" data-toggle="tab">Top Sellers</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">

                            <!-- tab 1 -->
                            <div class="tab-pane fade" id="tab-1">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-3.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Everose gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-4.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Yellow gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Platinum  <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-2.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Everose gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab 2 -->
                            <div class="tab-pane fade active in" id="tab-2">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Platinum <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-2.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Everose gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-3.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Everose gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-4.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Yellow gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab 3 -->
                            <div class="tab-pane fade" id="tab-3">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-2.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Everose gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-3.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Everose gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-4.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Yellow gold <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="thumbnail no-border no-padding">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                                    <img src="assets/img/preview/shop/product-1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="product-details.html">Rolex Platinum
                                                        <br>Day-Date 40</a></h4>
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="message-box">
                            <div class="message-box-inner">
                                <h2>Free shipping on all orders over $45</h2>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <h2 class="section-title"><span>Top Rated Products</span></h2>
                        <div class="top-products-carousel">
                            <div class="owl-carousel" id="top-products-carousel">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-1.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Classique 9067</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-2.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Plumes GJ15BB8</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-3.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Reine de Naples 9807</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-4.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Tradition 7077</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-5.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Tradition 7097</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-6.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Marine 5823</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-1.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Classique 9067</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">
                                            <img src="assets/img/preview/shop/top-rated-2.jpg" alt=""/>
                                            <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="product-details.html">Plumes GJ15BB8</a></h4>
                                        <div class="rating">
                                            <span class="star"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span><!--
                                            --><span class="star active"></span>
                                        </div>
                                        <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i class="fa fa-file-text-o"></i>See All Posts</a>
                        <h2 class="block-title"><span>Our Recent posts</span></h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="recent-post">
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/blog/recent-post-1.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <p class="media-category"><a href="#">Rolex</a> / <a href="#">Brands</a></p>
                                            <h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>
                                            Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                            <div class="media-meta">
                                                6th June 2014
                                                <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="recent-post">
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/blog/recent-post-2.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <p class="media-category"><a href="#">Watches</a> / <a href="#">Engineering</a></p>
                                            <h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>
                                            Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                            <div class="media-meta">
                                                6th June 2014
                                                <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="recent-post">
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/blog/recent-post-3.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <p class="media-category"><a href="#">Parts</a> / <a href="#">Watches</a></p>
                                            <h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>
                                            Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                            <div class="media-meta">
                                                6th June 2014
                                                <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="recent-post">
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/blog/recent-post-4.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <p class="media-category"><a href="#">Man</a> / <a href="#">Women</a></p>
                                            <h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>
                                            Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                            <div class="media-meta">
                                                6th June 2014
                                                <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                                <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <h2 class="section-title"><span>Brand &amp; Clients</span></h2>
                        <div class="partners-carousel">
                            <div class="owl-carousel" id="partners">
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-1.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-2.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-3.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-4.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-5.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-1.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-2.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-3.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-4.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-5.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-1.jpg" alt=""/></a></div>
                                <div><a href="#"><img src="assets/img/preview/partners/brand-logo-2.jpg" alt=""/></a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Top Sellers</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-1.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Alange Soehne : Lange 1</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Alange Soehne : Lange 2</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Breguet : Classique 9068</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Mens Watches</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-4.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : Fifty Fathoms Automatic</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-5.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5025-3630-52A</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-6.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5066F-1140-52B</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-list">
                                    <a class="btn btn-theme btn-title-more" href="#">See All</a>
                                    <h4 class="block-title"><span>Womens Watches</span></h4>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-7.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5025-3630-52A</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-8.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : 5015-1144-52</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="pull-left media-link" href="#">
                                            <img class="media-object" src="assets/img/preview/shop/top-sellers-9.jpg" alt="">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">Blancpain : Women</a></h4>
                                            <div class="rating">
                                                <span class="star"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span><!--
                                                --><span class="star active"></span>
                                            </div>
                                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

                <!-- PAGE -->
                <section class="page-section no-padding-top">
                    <div class="container">
                        <div class="row blocks shop-info-banners">
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-gift"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Buy 1 Get 1</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-comments"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Call to Free</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="media">
                                        <div class="pull-right"><i class="fa fa-trophy"></i></div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Money Back!</h4>
                                            Proin dictum elementum velit. Fusce euismod consequat ante.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /PAGE -->

            </div>
            <!-- /CONTENT AREA -->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">About Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="social-icons">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget">
                                    <h4 class="widget-title">News Letter</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Enter Your Mail and Get $10 Cash"/>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-theme btn-theme-transparent">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-categories">
                                    <h4 class="widget-title">Information</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget widget-tag-cloud">
                                    <h4 class="widget-title">Item Tags</h4>
                                    <ul>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li><a href="#">Top Sellers</a></li>
                                        <li><a href="#">E commerce</a></li>
                                        <li><a href="#">Hot Deals</a></li>
                                        <li><a href="#">Supplier</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Theme</a></li>
                                        <li><a href="#">Template</a></li>
                                        <li><a href="#">Jthemes</a></li>
                                        <li><a href="#">Themeforest</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="footer-meta">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="copyright">Copyright 2015 BELLA SHOP   |   All Rights Reserved   |   Designed By Jthemes</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="payments">
                                    <ul>
                                        <li><img src="assets/img/preview/payments/visa.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/mastercard.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/paypal.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/american-express.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/visa-electron.jpg" alt=""/></li>
                                        <li><img src="assets/img/preview/payments/maestro.jpg" alt=""/></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /WRAPPER -->

        <!-- JS Global -->
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="assets/plugins/superfish/js/superfish.min.js"></script>
        <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
        <script src="assets/plugins/jquery.sticky.min.js"></script>
        <script src="assets/plugins/jquery.easing.min.js"></script>
        <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
        <script src="assets/plugins/smooth-scrollbar.min.js"></script>

        <!-- JS Page Level -->
        <script src="assets/js/theme.js"></script>

        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="assets/plugins/jquery.cookie.js"></script>
        <script src="assets/js/theme-config.js"></script>
        <!--<![endif]-->

    </body>

<!-- Mirrored from eazzy.me/html/bella-watch/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 May 2016 19:22:28 GMT -->
</html>