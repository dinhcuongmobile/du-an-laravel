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
                                <li class="breadcrumb-item active" aria-current="page">Đặt lại mật khẩu </li>
                            </ol>
                        </div>
                    </nav>

                    <h1>Đặt lại mật khẩu</h1>
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
                            <form class="mb-0" action="{{route('tai-khoan.doi-mat-khau')}}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{$token}}">
                                <div class="form-group mb-0">
                                    <label for="" class="font-weight-normal">Mật khẩu mới</label>
                                    <input type="password" class="form-control" id="" name="password" />
                                </div>
                                @error('password')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror

                                <div class="form-group mb-0">
                                    <label for="" class="font-weight-normal">Nhập lại mật khẩu mới</label>
                                    <input type="password" class="form-control" id="" name="confirm_password" />
                                </div>
                                @error('password')
                                    <p class="Err text-danger">{{ $message }}</p>
                                @enderror

                                <div class="form-footer mb-0">

                                    <button type="submit"
                                        class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
                                        Đồng ý
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
