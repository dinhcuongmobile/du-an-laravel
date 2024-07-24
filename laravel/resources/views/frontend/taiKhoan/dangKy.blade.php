@extends('layout.main')
@section('container')
        <main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="demo4.html">Trang chủ</a></li>
								<li class="breadcrumb-item"><a href="category.html">Tài khoản</a></li>
								<li class="breadcrumb-item active" aria-current="page">Đăng ký </li>
							</ol>
						</div>
					</nav>
				</div>
			</div>

			<div class="container login-container mt-3">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="heading mb-1">
									<h2 class="title" style="text-align: center;">Đăng ký</h2>
								</div>

								<form action="#">
									<label>
										Tên đăng nhập
										<span class="required">*</span>
									</label>
									<input type="text" class="form-input form-wide mb-2" name="ten_dang_nhap"/>

									<label>
										Số điện thoại
										<span class="required">*</span>
									</label>
									<input type="text" class="form-input form-wide mb-2" name="so_dien_thoai"/>

									<label for="register-email">
										Email
										<span class="required">*</span>
									</label>
									<input type="email" class="form-input form-wide mb-2" id="register-email" name="email" />

									<label for="register-password">
										Mật khẩu
										<span class="required">*</span>
									</label>
									<input type="password" class="form-input form-wide mb-2" name="mat_khau"/>

									<div class="form-footer mb-2">
										<button type="submit" class="btn btn-dark btn-md w-100 mr-0">
											ĐĂNG KÝ
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->
@endsection