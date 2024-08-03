@extends('layout.main')
@section('container')
    <main class="main">
        <div class="page-header mb-5">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success" id="error-alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" id="error-alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="container">
            <form action="{{route('gio-hang.tiep-tuc-dat-hang')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="thumbnail-col"></th>
                                        <th class="thumbnail-col">Hình ảnh</th>
                                        <th class="product-col">Tên sản phẩm</th>
                                        <th class="price-col">Đơn giá</th>
                                        <th class="qty-col">Số lượng</th>
                                        <th class="text-right">Đơn giá</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody class="tbodyCart">
                                    @php
                                        $tong_thanh_toan=0;
                                    @endphp
                                    @foreach ($gio_hangs as $item)
                                        <tr class="product-row trgiohang">
                                            <td class="align-middle text-center"><input type="checkbox" name="select[]" value="{{$item->id}}"></td>
                                            <td class="col-2">
                                                <a href="{{route('san-pham.chi-tiet-san-pham',$item->san_pham_id)}}" class="product-image">
                                                    <img src="{{ Storage::url($item->hinh_anh) }}" alt="product" width="80px">
                                                </a>
                                            </td>
                                            <td class="col-4">
                                                <h5 class="product-title">
                                                    <a href="{{route('san-pham.chi-tiet-san-pham',$item->san_pham_id)}}">{{$item->ten_san_pham}}</a>
                                                </h5>
                                            </td>
                                            <td class="col-2">{{number_format($item->gia_khuyen_mai, 0, ',', '.')}}đ</td>
                                            <td class="col-2">
                                                <div class="product-quality">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <input data-id="{{$item->id}}" type="hidden"  name="id" value="{{$item->id}}">
                                                    <input type="hidden" name="gia_khuyen_mai" value="{{$item->gia_khuyen_mai}}">
                                                    <input type="hidden" name="so_luong_sp" value="{{$item->so_luong_sp}}">
                                                    <input data-id="{{$item->id}}" type="hidden" class="thanhtienjs" name="thanh_tien" value="{{$item->thanh_tien}}">
                                                    <div  class="dec qtybutton">-</div>
                                                    <input data-id="{{$item->id}}" class="cart-plus-minus-box input-text qty text" name="qtybutton" value="{{$item->so_luong}}" disabled>
                                                    <div  class="inc qtybutton">+</div>
                                                </div>
                                            </td>
                                            <td class="text-right thanhTien"><span class="subtotal-price">{{number_format($item->gia_khuyen_mai*$item->so_luong, 0, ',', '.')}}đ</span></td>
                                            <td class="col-1" style="text-align:center; cursor: pointer;">
                                                <a href="{{route('gio-hang.xoa-san-pham',$item->id)}}"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @php
                                            $tong_thanh_toan+=($item->gia_khuyen_mai*$item->so_luong);
                                        @endphp
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="7" class="clearfix">
                                            <div class="float-left">
                                                <a href="{{ route('san-pham.danh-muc') }}" class="btn btnGioHang">Tiếp tục mua sắm</a>
                                            </div><!-- End .float-left -->

                                            <div class="float-right">
                                                <button type="submit" name="xoa_gio_hang" class="btn btnGioHang">Xóa giỏ hàng</button>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- End .cart-table-container -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-md-12 mt-5">
                        <div class="cart-summary">
                            <div style="width: 100%; background-color: #f5f5f5; padding: 30px 30px 26px 33px">
                                <h4><span style="margin-right: 750px">Tổng thanh toán</span> <span id="tongThanhToan" style="color: red;">{{number_format($tong_thanh_toan, 0, ',', '.')}} đ</span></h4>
                            </div>

                            <div class="checkout-methods mt-2">
                                <button type="submit" name="tiep_tuc_dat_hang" class="btn btn-block btn-dark">Tiếp tục đặt hàng</button>
                            </div>
                        </div><!-- End .cart-summary -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main><!-- End .main -->
@endsection
