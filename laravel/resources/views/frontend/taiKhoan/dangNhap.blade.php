@extends('layout.main')
@section('container')
        <main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('trang-chu.home')}}">Trang chủ</a></li>
								<li class="breadcrumb-item">Tài khoản</li>
								<li class="breadcrumb-item active" aria-current="page">Đăng nhập </li>
							</ol>
						</div>
					</nav>

					<h1>Tài khoản của tôi</h1>
				</div>
			</div>
            @if (session('error'))
                <div class="alert alert-danger" id="error-alert">
                    {{ session('error') }}
                </div>
            @endif

			<div class="container login-container mt-3">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="heading mb-1">
									<h2 class="title" style="text-align: center;">Đăng nhập tài khoản</h2>
								</div>

								<form action="#">
									<label>
										Email
										<span class="required">*</span>
									</label>
									<input type="text" class="form-input form-wide" name="email"/>

									<label class="mt-2">
										Mật khẩu
										<span class="required">*</span>
									</label>
									<input type="password" class="form-input form-wide" name="password" />

									<div class="form-footer">
                                        <a href="{{route('tai-khoan.dang-ky')}}"
                                        class="forget-password text-dark form-footer-left">Bạn chưa có tài khoản? Đăng ký ngay</a>
										<a href="forgot-password.html"
											class="forget-password text-dark form-footer-right">Quên mật khẩu?</a>
									</div>
									<button type="submit" class="btn btn-dark btn-md w-100">
										ĐĂNG NHẬP
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->
@endsection
