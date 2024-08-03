@extends('layout.main')
@section('container')
{{-- @dd($gio_hang) --}}
        <main class="main main-test mb-5">
            <div class="page-header mb-3">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('trang-chu.home')}}">Trang chủ</a></li>
								<li class="breadcrumb-item"><a href="{{route('gio-hang.show')}}">Giỏ hàng</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chi tiết thanh toán </li>
							</ol>
						</div>
					</nav>
				</div>
			</div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        <li>Vui lòng nhập đầy đủ thông tin hợp lệ !</li>
                    </ul>
                </div>
            @endif
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
            <div class="container checkout-container">
                <form action="{{route('gio-hang.xac-nhan-dat-hang')}}" method="POST" id="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-4" style="margin-right: 100px">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Chi tiết thanh toán</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Họ và Tên
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" name="ho_va_ten" class="form-control" value="{{Auth::user()->ho_va_ten}}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Số điện thoại
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" name="so_dien_thoai" class="form-control" value="{{old('so_dien_thoai',Auth::user()->so_dien_thoai)}}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Địa chỉ
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" name="dia_chi" class="form-control" value="{{old('dia_chi',Auth::user()->dia_chi)}}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mt-0">
                                        <input type="checkbox" name="dia_chi_khac" value="dia_chi_khac" class="custom-control-input" id="different-shipping" />
                                        <label class="custom-control-label" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour" for="different-shipping">Giao hàng tới địa chỉ khác?</label>
                                    </div>
                                </div>

                                <div id="collapseFour" class="collapse">
                                    <div class="shipping-info">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Họ và Tên
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" name="ho_va_ten_nhan" class="form-control" value="{{old('ho_va_ten_nhan')}}"/>
                                                    @error('ho_va_ten_nhan')
                                                        <p class="Err text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Số điện thoại
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" name="so_dt_nhan" class="form-control" value="{{old('so_dt_nhan')}}"/>
                                                    @error('so_dt_nhan')
                                                        <p class="Err text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Địa chỉ
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" name="dia_chi_nhan" class="form-control" value="{{old('dia_chi_nhan')}}" />
                                                    @error('dia_chi_nhan')
                                                        <p class="Err text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->

                    <div class="col-lg-7 card">
                        <div class="order-summary mt-1">
                            <h3 class="card-header">ĐƠN HÀNG CỦA BẠN</h3>

                            <table class="table table-mini-cart card-body">
                                <thead>
                                    <tr>
                                        <th colspan="4">Sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $tongTien=0;
                                    @endphp
                                    @foreach ($gio_hang as $item)
                                    <tr>
                                        <td class="product-col col-5">
                                            <h5 class="product-title">
                                                {{$item->ten_san_pham}} <span style="color: red">×</span>
                                                <span class="product-qty">{{$item->so_luong}}</span>
                                            </h5>
                                        </td>

                                        <td class="price-col col-1">
                                            <span>{{number_format($item->thanh_tien, 0, ',', '.')}}đ</span>
                                        </td>
                                        <td >
                                            <form action="#">
                                                <div class="input-group col-md-10 " style="margin-left: 65px">
                                                    <input type="text" class="form-control" placeholder="Nhập mã giảm giá">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-sm">Áp dụng</button>
                                                    </div>
                                                </div><!-- End .input-group -->
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $tongTien+=$item->thanh_tien;
                                    @endphp
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr class="order-shipping">
                                        <td class="text-left" colspan="3">
                                            <h4 class="m-b-sm">Giao hàng</h4>

                                            <div class="form-group form-group-custom-control">
                                                <div class="custom-control custom-radio d-flex">
                                                    <input type="radio" class="custom-control-input" name="radio" value="0" checked />
                                                    <label class="custom-control-label">Ship COD</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->

                                            <div class="form-group form-group-custom-control mb-0">
                                                <div class="custom-control custom-radio d-flex mb-0">
                                                    <input type="radio" name="radio" class="custom-control-input" value="1">
                                                    <label class="custom-control-label">Thanh toán online</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->
                                        </td>

                                    </tr>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <h4>Thành tiền</h4>
                                        </td>

                                        <td class="price-col" colspan="2">
                                            <input type="hidden" name="tong_thanh_toan" value="{{$tongTien}}">
                                            <h6 class="float-right text-danger" style="font-size:20px">{{number_format($tongTien, 0, ',', '.')}} đ</h6>
                                        </td>
                                    </tr>
                                    {{-- <tr class="order-total">
                                        <td>
                                            <h4>Tổng tiền</h4>
                                        </td>
                                        <td colspan="2">
                                            <b class="total-price"><span>$1,603.80</span></b>
                                        </td>
                                    </tr> --}}
                                </tfoot>
                            </table>

                            <!-- <div class="payment-methods">
                                <h4 class="">Payment methods</h4>
                                <div class="info-box with-icon p-0">
                                    <p>
                                        Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
                                    </p>
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-dark btn-place-order card-footer mb-3" style="width:680px;">Đặt hàng</button>
                        </div>
                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </div>
                </form>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->
@endsection
