@extends('layout.main')
@section('container')
<main class="main">
    <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big mb-2 text-uppercase" data-owl-options="{'loop': false }">
        @foreach ($banners as $item)
        <div class="home-slide home-slide1 banner">
            <a href=""><img class="slide-bg" src="{{Storage::url($item->hinh_anh)}}" width="1903" height="300" alt="slider image"></a>
        </div>
        @endforeach

        <!-- End .home-slide -->

        {{-- <div class="home-slide home-slide2 banner banner-md-vw">
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
        </div> --}}
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
                    <h4>FREE SHIPPING</h4>
                    <p class="text-body">Giao nhanh miễn phí</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-money"></i>

                <div class="info-box-content">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p class="text-body">Hoàn tiền 100%</p>
                </div>
                <!-- End .info-box-content -->
            </div>
            <!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-support"></i>

                <div class="info-box-content">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p class="text-body">Hỗ trợ 24/7</p>
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
                'dots': true,
                'nav': true
            }">
                @foreach ($san_pham_noi_bat as $item)
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="{{route('san-pham.chi-tiet-san-pham',$item->id)}}">
                            <img src="{{Storage::url($item->hinh_anh)}}" width="280" height="280" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-{{$item->khuyen_mai}}%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="{{route('san-pham.san-pham-danh-muc',$item->danh_muc_id)}}" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('san-pham.chi-tiet-san-pham',$item->id)}}">{{$item->ten_san_pham}}</a>
                        </h3>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">{{number_format($item->gia_san_pham, 0, ',', '.')}}đ</del>
                            <span class="product-price">{{number_format($item->gia_khuyen_mai, 0, ',', '.')}}đ</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>Thêm vào giỏ hàng</span></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                @endforeach
            </div>
            <!-- End .featured-proucts -->
        </div>
    </section>

    <section class="new-products-section">
        <div class="container">
            <h2 class="section-title heading-border ls-20 border-0">SẢN PHẨM MỚI NHẤT</h2>

            <div class="products-slider custom-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center mb-2" data-owl-options="{
                'dots': true,
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
                @foreach ($san_pham_moi_nhat as $item)
                <div class="product-default appear-animate" data-animation-name="fadeInRightShorter">
                    <figure>
                        <a href="{{route('san-pham.chi-tiet-san-pham',$item->id)}}">
                            <img src="{{Storage::url($item->hinh_anh)}}" width="220" height="220" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-sale">-{{$item->khuyen_mai}}%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="{{route('san-pham.san-pham-danh-muc',$item->danh_muc_id)}}" class="product-category">Category</a>
                        </div>
                        <h3 class="product-title">
                            <a href="{{route('san-pham.chi-tiet-san-pham',$item->id)}}">{{$item->ten_san_pham}}</a>
                        </h3>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">{{number_format($item->gia_san_pham, 0, ',', '.')}}đ</del>
                            <span class="product-price">{{number_format($item->gia_khuyen_mai, 0, ',', '.')}}đ</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i><span>Thêm vào giỏ hàng</span></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                @endforeach
            </div>
            <!-- End .featured-proucts -->

            <div class="banner banner-big-sale appear-animate" data-animation-delay="200" data-animation-name="fadeInUpShorter" style="background: #2A95CB center/cover url('assets/images/demoes/demo4/banners/banner-4.jpg');">
                <div class="banner-content row align-items-center mx-0">
                    <div class="col-md-9 col-sm-8">
                        <h2 class="text-white text-uppercase text-center text-sm-left ls-n-20 mb-md-0 px-4">
                            <b class="d-inline-block mr-3 mb-1 mb-md-0">Siêu Sale</b> Giảm giá các mặt hàng mới nhất lên tới 70%
                            <small class="text-transform-none align-middle">Chỉ áp dụng khi mua hàng trực tuyến</small>
                        </h2>
                    </div>
                    <div class="col-md-3 col-sm-4 text-center text-sm-right">
                        <a class="btn btn-light btn-white btn-lg" href="category.html">Xem ưu đãi</a>
                    </div>
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
                'dots': true,
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
                @foreach ($tin_tucs as $item)
                <article class="post">
                    <div class="post-media">
                        <a href="{{route('tin-tuc.chi-tiet',$item->id)}}">
                            <img src="{{Storage::url($item->hinh_anh)}}" alt="Post" width="225" height="280">
                        </a>
                        <div class="post-date">
                            <span class="day">{{ \Carbon\Carbon::parse($item->created_at)->format('d') }}</span>
                            <span class="month">{{ \Carbon\Carbon::parse($item->created_at)->format('M') }}</span>
                        </div><!-- End .post-date -->
                    </div>
                    <!-- End .post-media -->

                    <div class="post-body">
                        <h2 class="post-title">
                            <a href="{{route('tin-tuc.chi-tiet',$item->id)}}">{{$item->tieu_de}}</a>
                        </h2>
                        <div class="post-content">
                            <p>{!! Str::limit(strip_tags($item->noi_dung), 150, '...') !!}</p>
                        </div>
                        <!-- End .post-content -->
                    </div>
                    <!-- End .post-body -->
                </article>
                <!-- End .post -->
                @endforeach
            </div>

            <hr class="mt-0 m-b-5">
        </div>
    </section>
</main>
<!-- End .main -->
@endsection
