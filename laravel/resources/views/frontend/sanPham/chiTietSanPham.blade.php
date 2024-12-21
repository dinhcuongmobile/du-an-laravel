@extends('layout.main')
@section('container')
<main class="main">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('trang-chu.home')}}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item">chi tiết sản phẩm</li>
            </ol>
        </nav>

        <div class="product-single-container product-single-default">
            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>

                            <div class="product-label label-sale">
                                -{{$san_pham->khuyen_mai}}%
                            </div>
                        </div>

                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                            <div class="product-item">
                                <img class="product-single-image" src="{{Storage::url($san_pham->hinh_anh)}}" data-zoom-image="{{Storage::url($san_pham->hinh_anh)}}" width="468" height="468" alt="product" />
                            </div>
                        </div>
                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>

                    <div class="prod-thumbnail owl-dots">
                        <div class="owl-dot">
                            <img src="{{Storage::url($san_pham->hinh_anh)}}" width="110" height="110" alt="product-thumbnail" />
                        </div>
                    </div>
                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">
                    <h1 class="product-title">{{$san_pham->ten_san_pham}}</h1>

                    <hr class="short-divider">

                    <div class="price-box">
                        <span class="old-price">{{number_format($san_pham->gia_san_pham, 0, ',', '.')}}đ</span>
                        <span class="new-price">{{number_format($san_pham->gia_khuyen_mai, 0, ',', '.')}}đ</span>
                    </div>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                            {{ Str::limit($san_pham->mo_ta, 200, '...') }}
                        </p>
                    </div>
                    <!-- End .product-desc -->

                    <ul class="single-info-list">

                        <li>
                            MSP: <strong>DCM-{{$san_pham->id}}</strong>
                        </li>

                        <li>
                            SL kho:
                            @if ($san_pham->so_luong>0)
                            <strong>{{$san_pham->so_luong}}</strong>
                            @else
                            <strong style="color: red">Hết hàng</strong>
                            @endif
                        </li>

                        <li>
                            Category: <strong><a href="{{route('san-pham.san-pham-danh-muc',$san_pham->danh_muc_id)}}" class="product-category">{{$danh_muc->ten_danh_muc}}</a></strong>
                        </li>
                    </ul>

                    <div class="product-action">
                        @if ($san_pham->so_luong>0)
                           <form>
                                <div class="row">
                                    <div class="product-quality" style="margin-right: 15px">
                                        <input type="hidden" name="so_luong_sp" value="{{$san_pham->so_luong}}">
                                        <div  class="tru soLuong">-</div>
                                        <input class="cart-plus-minus-box input-text qty text" id="soLuongChiTiet" name="soLuong" value="1" disabled>
                                        <div  class="cong soLuong">+</div>
                                    </div>
                                    <!-- End .product-single-qty -->
                                    <input type="hidden"  name="_token" value="{{ csrf_token() }}" />
                                    <button onclick="themGioHangChiTiet({{$san_pham->id}},{{$san_pham->gia_khuyen_mai}})" class="btn btn-dark mr-2"><span>Thêm vào giỏ hàng</span></button>
                                </div>
                           </form>
                        @else
                            <button class="btn btn-dark mr-2" disabled><span>Tạm thời hết hàng</span></button>
                        @endif

                    </div>
                    <!-- End .product-action -->
                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Mô tả</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Bình luận (<span id="countBinhLuan1">{{$count_binh_luan}}</span>)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>{{$san_pham->mo_ta}}</p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title"><span id="countBinhLuan2">{{$count_binh_luan}}</span> Bình luận cho {{$san_pham->ten_san_pham}}</h3>
                        <div id="loadBinhLuan">
                            @foreach ($binh_luans as $item)
                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="{{asset('assets/images/blog/avt_danh_gia.png')}}" alt="author" width="80" height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <span class="comment-by">
                                                    <strong>{{$item->ho_va_ten}}</strong> –
                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('M') }} {{ \Carbon\Carbon::parse($item->created_at)->format('d') }}, {{ \Carbon\Carbon::parse($item->created_at)->format('Y') }}
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p>{{$item->noi_dung}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="divider"></div>

                        @if (Auth::check())
                            <div class="add-product-review">
                                <h3 class="review-title">Bình luận cho sản phẩm này</h3>

                                <form class="comment-form m-0">
                                    <div class="form-group">
                                        <label>Bình luận của bạn <span class="text-danger">*</span></label>
                                        <textarea id="noidung" cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        <p id="binhluanErr" style="color:red;"></p>
                                    </div>
                                    <!-- End .form-group -->
                                    <input id="ngaybinhluan" type="hidden" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <input type="hidden" id="binhLuanToken" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" id="hoTenBinhLuan" value="{{ Auth::user()->ho_va_ten }}">
                                    <span class="btn btn-primary" onclick="binhLuan({{$san_pham->id}})">Bình luận</span>
                                </form>
                            </div>
                        @endif
                        <!-- End .add-product-review -->

                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Các sản phẩm liên quan</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                @foreach ($san_phams as $item)
                <div class="product-default">
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

                            @if ($item->so_luong>0)
                                <input type="hidden"  name="_token" value="{{ csrf_token() }}" />
                                <button data-id="{{$item->id}}" onclick="themGioHang({{$item->id}},{{$item->gia_khuyen_mai}})" class="btn-icon btn-add-cart product-type-simple"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ hàng</span></button>
                            @else
                            <button class="btn-icon btn-add-cart product-type-simple" disabled><span>Tạm thời hết hàng</span></button>
                            @endif

                        </div>
                    </div>
                    <!-- End .product-details -->
                </div>
                @endforeach

            </div>
            <!-- End .products-slider -->
        </div>
        <!-- End .products-section -->

        <hr class="mt-0 m-b-5" />
    </div>
    <!-- End .container -->
</main>
<!-- End .main -->
@endsection
