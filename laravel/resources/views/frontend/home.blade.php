@extends('layout.main')
@section('container')
<main class="main">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{'loop': false }">
        <div class="home-slide home-slide1 banner">
            <img class="slide-bg" src="assets/images/demoes/demo4/slider/slide-1.jpg" width="1903" height="499" alt="slider image">
            <div class="container d-flex align-items-center">
                <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                    <h4 class="text-transform-none m-b-3">Find the Boundaries. Push Through!</h4>
                    <h2 class="text-transform-none mb-0">Summer Sale</h2>
                    <h3 class="m-b-3">70% Off</h3>
                    <h5 class="d-inline-block mb-0">
                        <span>Starting At</span>
                        <b class="coupon-sale-text text-white bg-secondary align-middle"><sup>$</sup><em
                                class="align-text-top">199</em><sup>99</sup></b>
                    </h5>
                    <a href="category.html" class="btn btn-dark btn-lg">Shop Now!</a>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->

        <div class="home-slide home-slide2 banner banner-md-vw">
            <img class="slide-bg" style="background-color: #ccc;" width="1903" height="499" src="assets/images/demoes/demo4/slider/slide-2.jpg" alt="slider image">
            <div class="container d-flex align-items-center">
                <div class="banner-layer d-flex justify-content-center appear-animate" data-animation-name="fadeInUpShorter">
                    <div class="mx-auto">
                        <h4 class="m-b-1">Extra</h4>
                        <h3 class="m-b-2">20% off</h3>
                        <h3 class="mb-2 heading-border">Accessories</h3>
                        <h2 class="text-transform-none m-b-4">Summer Sale</h2>
                        <a href="category.html" class="btn btn-block btn-dark">Shop All Sale</a>
                    </div>
                </div>
                <!-- End .banner-layer -->
            </div>
        </div>
        <!-- End .home-slide -->
    </div>
    <!-- End .home-slider -->

    <div class="container">
        <div class="info-boxes-slider owl-carousel owl-theme mb-2" data-owl-options="{
            'dots': false,
            'loop': false,
            'responsive': {
                '576': {
                    'items': 2
                },
                '992': {
                    'items': 3
                }
            }
        }">
            <div class="info-box info-box-icon-left">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>FREE SHIPPING &amp; RETURN</h4>
                    <p class="text-body">Free shipping on all orders over $99.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-money"></i>

                <div class="info-box-content">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p class="text-body">100% money back guarantee</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-support"></i>

                <div class="info-box-content">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p class="text-body">Lorem ipsum dolor sit amet.</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->
        </div>
        <!-- End .info-boxes-slider -->

        <div class="banners-container mb-2">
            <div class="banners-slider owl-carousel owl-theme" data-owl-options="{
                'dots': false
            }">
                <div class="banner banner1 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInLeftShorter" data-animation-delay="500">
                    <figure class="w-100">
                        <img src="assets/images/demoes/demo4/banners/banner-1.jpg" alt="banner" width="380" height="175" />
                    </figure>
                    <div class="banner-layer">
                        <h3 class="m-b-2">Porto Watches</h3>
                        <h4 class="m-b-3 text-primary"><sup class="text-dark"><del>20%</del></sup>30%<sup>OFF</sup></h4>
                        <a href="category.html" class="btn btn-sm btn-dark">Shop Now</a>
                    </div>
                </div>
                <!-- End .banner -->

                <div class="banner banner2 banner-sm-vw text-uppercase d-flex align-items-center appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">
                    <figure class="w-100">
                        <img src="assets/images/demoes/demo4/banners/banner-2.jpg" style="background-color: #ccc;" alt="banner" width="380" height="175" />
                    </figure>
                    <div class="banner-layer text-center">
                        <div class="row align-items-lg-center">
                            <div class="col-lg-7 text-lg-right">
                                <h3>Deal Promos</h3>
                                <h4 class="pb-4 pb-lg-0 mb-0 text-body">Starting at $99</h4>
                            </div>
                            <div class="col-lg-5 text-lg-left px-0 px-xl-3">
                                <a href="category.html" class="btn btn-sm btn-dark">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .banner -->

                <div class="banner banner3 banner-sm-vw d-flex align-items-center appear-animate" style="background-color: #ccc;" data-animation-name="fadeInRightShorter" data-animation-delay="500">
                    <figure class="w-100">
                        <img src="assets/images/demoes/demo4/banners/banner-3.jpg" alt="banner" width="380" height="175" />
                    </figure>
                    <div class="banner-layer text-right">
                        <h3 class="m-b-2">Handbags</h3>
                        <h4 class="m-b-2 text-secondary text-uppercase">Starting at $99</h4>
                        <a href="category.html" class="btn btn-sm btn-dark">Shop Now</a>
                    </div>
                </div>
                <!-- End .banner -->
            </div>
        </div>
    </div>
    <!-- End .container -->

    <section class="featured-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">SẢN PHẨM TIÊU BIỂU</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center" data-owl-options="{
                'dots': false,
                'nav': true
            }">
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-1.jpg" width="280" height="280" alt="product">
                            <img src="assets/images/products/product-1-2.jpg" width="280" height="280" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Ultimate 3D Bluetooth Speaker</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>SELECT
                                    OPTIONS</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-2.jpg" width="280" height="280" alt="product">
                            <img src="assets/images/products/product-2-2.jpg" width="280" height="280" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-30%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Brown Women Casual HandBag</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>SELECT
                                    OPTIONS</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-3.jpg" width="280" height="280" alt="product">
                            <img src="assets/images/products/product-3-2.jpg" width="280" height="280" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Circled Ultimate 3D Speaker</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-4.jpg" width="280" height="280" alt="product">
                            <img src="assets/images/products/product-4-2.jpg" width="280" height="280" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-40%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Blue Backpack for the Young - S</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-5.jpg" width="280" height="280" alt="product">
                            <img src="assets/images/products/product-5-2.jpg" width="280" height="280" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-15%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Casual Spring Blue Shoes</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <!-- End .featured-proucts -->
        </div>
    </section>

    <section class="new-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">SẢN PHẨM MỚI NHẤT</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{
                'dots': false,
                'nav': true,
                'responsive': {
                    '992': {
                        'items': 4
                    },
                    '1200': {
                        'items': 5
                    }
                }
            }">
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-6.jpg" width="220" height="220" alt="product">
                            <img src="assets/images/products/product-6-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Men Black Gentle Belt</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-7.jpg" width="220" height="220" alt="product">
                            <img src="assets/images/products/product-7-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Brown-Black Men Casual Glasses</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-8.jpg" width="220" height="220" alt="product">
                            <img src="assets/images/products/product-8-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Brown-Black Men Casual Glasses</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-9.jpg" width="220" height="220" alt="product">
                            <img src="assets/images/products/product-9-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-30%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Black Men Casual Glasses</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>SELECT
                                    OPTIONS</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-10.jpg" width="220" height="220" alt="product">
                            <img src="assets/images/products/product-10-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Basketball Sports Blue Shoes</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>ADD TO CART</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="product.html">
                            <img src="assets/images/products/product-11.jpg" width="220" height="220" alt="product">
                            <img src="assets/images/products/product-11-2.jpg" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="product.html">Men Sports Travel Bag</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$59.00</del>
                            <span class="product-price">$49.00</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                    class="icon-heart"></i></a>
                            <a href="product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i><span>SELECT
                                    OPTIONS</span></a>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i
                                    class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <!-- End .featured-proucts -->

            <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('assets/images/demoes/demo4/banners/banner-4.jpg');">
                <div class="banner-content row align-items-center mx-0">
                    <div class="col-md-9 col-sm-8">
                        <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                            <b class="d-inline-block mr-3 mb-1 mb-md-0">Big Sale</b> All new fashion brands items up to 70% off
                            <small class="text-transform-none align-middle">Online Purchases Only</small>
                        </h2>
                    </div>
                    <div class="col-md-3 col-sm-4 text-center text-sm-right">
                        <a class="btn btn-light btn-white btn-lg" href="category.html">View Sale</a>
                    </div>
                </div>
            </div>

            <h2 class="section-title categories-section-title heading-border border-0 ls-0 appear-animate" data-animation-delay="100" data-animation-name="fadeInUpShorter">DANH MỤC SẢN PHẨM</h2>

            <div class="categories-slider owl-carousel owl-theme show-nav-hover nav-outer">
                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                    <a href="category.html">
                        <figure>
                            <img src="assets/images/demoes/demo4/products/categories/category-1.jpg" alt="category" width="280" height="240" />
                        </figure>
                        <div class="category-content">
                            <h3>Dress</h3>
                            <span><mark class="count">3</mark> products</span>
                        </div>
                    </a>
                </div>

                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                    <a href="category.html">
                        <figure>
                            <img src="assets/images/demoes/demo4/products/categories/category-2.jpg" alt="category" width="220" height="220" />
                        </figure>
                        <div class="category-content">
                            <h3>Watches</h3>
                            <span><mark class="count">3</mark> products</span>
                        </div>
                    </a>
                </div>

                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                    <a href="category.html">
                        <figure>
                            <img src="assets/images/demoes/demo4/products/categories/category-3.jpg" alt="category" width="220" height="220" />
                        </figure>
                        <div class="category-content">
                            <h3>Machine</h3>
                            <span><mark class="count">3</mark> products</span>
                        </div>
                    </a>
                </div>

                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                    <a href="category.html">
                        <figure>
                            <img src="assets/images/demoes/demo4/products/categories/category-4.jpg" alt="category" width="220" height="220" />
                        </figure>
                        <div class="category-content">
                            <h3>Sofa</h3>
                            <span><mark class="count">3</mark> products</span>
                        </div>
                    </a>
                </div>

                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                    <a href="category.html">
                        <figure>
                            <img src="assets/images/demoes/demo4/products/categories/category-6.jpg" alt="category" width="220" height="220" />
                        </figure>
                        <div class="category-content">
                            <h3>Headphone</h3>
                            <span><mark class="count">3</mark> products</span>
                        </div>
                    </a>
                </div>

                <div class="product-category appear-animate" data-animation-name="fadeInUpShorter">
                    <a href="category.html">
                        <figure>
                            <img src="assets/images/demoes/demo4/products/categories/category-5.jpg" alt="category" width="220" height="220" />
                        </figure>
                        <div class="category-content">
                            <h3>Sports</h3>
                            <span><mark class="count">3</mark> products</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section pb-0">
        <div class="container">
            <h2 class="section-title heading-border border-0 appear-animate" data-animation-name="fadeInUp">
                TIN TỨC</h2>

            <div class="owl-carousel owl-theme appear-animate" data-animation-name="fadeIn" data-owl-options="{
                'loop': false,
                'margin': 20,
                'autoHeight': true,
                'autoplay': false,
                'dots': false,
                'items': 2,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '480': {
                        'items': 2
                    },
                    '576': {
                        'items': 3
                    },
                    '768': {
                        'items': 4
                    }
                }
            }">
                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="assets/images/blog/home/post-1.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Top New Collection</a>
                        </h2>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus sem. Aenean...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="assets/images/blog/home/post-2.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Fashion Trends</a>
                        </h2>
                        <div class="post-content">
                            <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="assets/images/blog/home/post-3.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Right Choices</a>
                        </h2>
                        <div class="post-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->

                <article class="post">
                    <div class="post-media">
                        <a href="single.html">
                            <img src="assets/images/blog/home/post-4.jpg" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">26</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="single.html">Perfect Accessories</a>
                        </h2>
                        <div class="post-content">
                            <p>Leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of...</p>
                        </div>
                        <!-- End .post-content -->
                        <a href="single.html" class="post-comment">0 Comments</a>
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->
            </div>

            <hr class="mt-0 m-b-5">
        </div>
    </section>
</main>
<!-- End .main -->
@endsection
