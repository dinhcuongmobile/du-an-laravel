@extends('layout.main')
@section('container')
    <main class="main">
        <div class="page-header">
            <div class="page-header">
                <div class="container d-flex flex-column align-items-center">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('trang-chu.home') }}">Trang chủ</a></li>
                                <li class="breadcrumb-item">Tài khoản</li>
                                <li class="breadcrumb-item active" aria-current="page">Quên mật khẩu </li>
                            </ol>
                        </div>
                    </nav>

                    <h1>Lấy lại mật khẩu</h1>
                </div>
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
        <div class="container reset-password-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="feature-box border-top-primary">
                        <div class="feature-box-content">
                            <form class="mb-0" action="{{route('tai-khoan.quen-mat-khau')}}" method="POST">
                                @csrf
                                <p>
                                    Quên mật khẩu? Vui lòng nhập địa chỉ email của bạn.
                                    Bạn sẽ nhận được liên kết để tạo mật khẩu mới qua email.
                                </p>
                                <div class="form-group mb-0">
                                    <label for="reset-email" class="font-weight-normal">Email</label>
                                    <input type="text" class="form-control" id="reset-email" name="email" />
                                </div>
                                @error('email')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror
                                <div class="form-footer mb-0">
                                    <a href="{{ route('tai-khoan.dang-nhap') }}">Click here to login</a>

                                    <button type="submit"
                                        class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
                                        Reset Password
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
