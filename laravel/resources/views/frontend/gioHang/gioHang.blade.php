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
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Tên sản phẩm</th>
										<th class="price-col">Giá</th>
										<th class="qty-col">Số lượng</th>
										<th class="text-right">Đơn giá</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="tbodyCart">
									<tr class="product-row">
										<td class="col-2">
											<a href="product.html" class="product-image">
												<img src="{{asset('assets/images/products/product-4.jpg')}}" alt="product" width="80px">
											</a>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="product.html">Men Watch</a>
											</h5>
										</td>
										<td>$17.90</td>
										<td>
											<div class="product-single-qty">
												<input class="horizontal-quantity form-control" type="text">
											</div><!-- End .product-single-qty -->
										</td>
										<td class="text-right"><span class="subtotal-price">$17.90</span></td>
										<td class="col-1" style="text-align:center; cursor: pointer;"><i class="fas fa-trash-alt"></i></td>
									</tr>
								</tbody>


								<tfoot>
									<tr>
										<td colspan="6" class="clearfix">
											<div class="float-left">
												<div class="cart-discount">
													<a href="{{route('trang-chu.home')}}" class="btn btn-secondary">Tiếp tục mua sắm</a>
												</div>
											</div><!-- End .float-left -->

											<div class="float-right">
												<button type="submit" class="btn btn-shop btn-update-cart">
													Xóa giỏ hàng
												</button>
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>Tổng thanh toán</h3>

							<table class="table table-totals">
								<tfoot>
									<tr>
										<td>Tổng tiền</td>
										<td>$17.90</td>
									</tr>
								</tfoot>
							</table>

							<div class="checkout-methods">
								<a href="{{route('gio-hang.chi-tiet-thanh-toan')}}" class="btn btn-block btn-dark">Tiếp tục đặt hàng
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->
@endsection