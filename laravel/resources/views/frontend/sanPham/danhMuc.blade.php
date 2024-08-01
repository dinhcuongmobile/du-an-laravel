@extends('layout.main')
@section('container')
<main class="main">

            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('trang-chu.home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle">
                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
										<line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
										<line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
										<line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
										<line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
										<line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
										<line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
										<path
											d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
										<path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
										<path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
										<path
											d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
									</svg>
                                    <span>Filter</span>
                                </a>
                            </div>
                        </nav>

                        <div class="row">
                            @foreach ($san_phams as $item)
                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{Storage::url($item->hinh_anh)}} " width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-{{$item->khuyen_mai}}%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="{{route('san-pham.san-pham-danh-muc',$item->danh_muc_id)}}" class="product-category">Category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">{{$item->ten_san_pham}}</a> </h3>

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
                            </div>
                            @endforeach
                            <!-- End .col-sm-4 -->
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination float-right">
                            {{$san_phams->links()}}
                        </nav>
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Danh mục sản phẩm</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            @foreach($count_danh_muc as $item)
                                            <li>
                                                <a href="{{route('san-pham.san-pham-danh-muc',$item->id)}}">{{ $item->ten_danh_muc }}
                                                    <span class="products-count">({{ $item->san_phams_count }})</span>
                                                </a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Giá</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <form action="" method="get">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div>
                                            </div>

                                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Giá:
                                                    <span id="filter-price-range">0₫ - 10,000,000₫</span>
                                                </div>

                                                <input type="hidden" name="min_price" id="min-price" value="0">
                                                <input type="hidden" name="max_price" id="max-price" value="10000000">
                                                <button type="submit" class="btn btn-primary">Lọc</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-4"></div>
            <!-- margin -->
        </main>
@endsection
