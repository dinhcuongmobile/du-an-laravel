@extends('layout.main')
@section('container')

        <main class="main main-test mb-5">
            <div class="page-header mb-3">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
								<li class="breadcrumb-item"><a href="#">Giỏ hàng</a></li>
								<li class="breadcrumb-item active" aria-current="page">Chi tiết thanh toán </li>
							</ol>
						</div>
					</nav>
				</div>
			</div>
            <div class="container checkout-container">

                <div class="row">
                    <div class="col-lg-7">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Chi tiết thanh toán</h2>

                                <form action="#" id="checkout-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Họ và Tên
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Số điện thoại
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="form-control"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Địa chỉ
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox mt-0">
                                            <input type="checkbox" class="custom-control-input" id="different-shipping" />
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
                                                        <input type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Số điện thoại
                                                            <abbr class="required" title="required">*</abbr>
                                                        </label>
                                                        <input type="text" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Địa chỉ
                                                            <abbr class="required" title="required">*</abbr>
                                                        </label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->

                    <div class="col-lg-5">
                        <div class="order-summary mt-1">
                            <h3>ĐƠN HÀNG CỦA BẠN</h3>

                            <table class="table table-mini-cart">
                                <thead>
                                    <tr>
                                        <th colspan="2">Sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-col">
                                            <h5 class="product-title">
                                                Circled Ultimate 3D Speaker ×
                                                <span class="product-qty">4</span>
                                            </h5>
                                        </td>

                                        <td class="price-col">
                                            <span>$1,040.00</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-col">
                                            <h5 class="product-title">
                                                Fashion Computer Bag ×
                                                <span class="product-qty">2</span>
                                            </h5>
                                        </td>

                                        <td class="price-col">
                                            <span>$418.00</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <td>
                                            <h4>Thành tiền</h4>
                                        </td>

                                        <td class="price-col">
                                            <span>$1,458.00</span>
                                        </td>
                                    </tr>
                                    <tr class="order-shipping">
                                        <td class="text-left" colspan="2">
                                            <h4 class="m-b-sm">Giao hàng</h4>

                                            <div class="form-group form-group-custom-control">
                                                <div class="custom-control custom-radio d-flex">
                                                    <input type="radio" class="custom-control-input" name="radio" checked />
                                                    <label class="custom-control-label">Ship COD</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->

                                            <div class="form-group form-group-custom-control mb-0">
                                                <div class="custom-control custom-radio d-flex mb-0">
                                                    <input type="radio" name="radio" class="custom-control-input">
                                                    <label class="custom-control-label">Thanh toán online</label>
                                                </div>
                                                <!-- End .custom-checkbox -->
                                            </div>
                                            <!-- End .form-group -->
                                        </td>

                                    </tr>

                                    <tr class="order-total">
                                        <td>
                                            <h4>Tổng tiền</h4>
                                        </td>
                                        <td>
                                            <b class="total-price"><span>$1,603.80</span></b>
                                        </td>
                                    </tr>
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

                            <button class="btn btn-dark btn-place-order" style="width:480px;">
                                Đặt hàng
                            </button>
                        </div>
                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->
@endsection