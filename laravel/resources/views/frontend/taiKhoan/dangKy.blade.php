@extends('layout.main')
@section('container')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="demo4.html">Trang chủ</a></li>
                            <li class="breadcrumb-item">Tài khoản</li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng ký </li>
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
        <div class="container login-container mt-3">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading mb-1">
                                <h2 class="title" style="text-align: center;">Đăng ký</h2>
                            </div>

                            <form action="{{ route('tai-khoan.dang-ky') }}" method="post">
                                @csrf
                                <label>
                                    Họ và Tên
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" name="ho_va_ten"
                                    value="{{ old('ho_va_ten') }}" />
                                @error('ho_va_ten')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror

                                <label for="register-email">
                                    Email
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="form-input form-wide mb-2" id="register-email" name="email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror

                                <label for="register-password">
                                    Mật khẩu
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide mb-2" name="password" />
                                @error('password')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror

                                <label for="register-password">
                                    Nhập lại mật khẩu
                                    <span class="required">*</span>
                                </label>
                                <input type="password" class="form-input form-wide mb-2" name="confirm_password" />
                                @error('confirm_password')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror

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
