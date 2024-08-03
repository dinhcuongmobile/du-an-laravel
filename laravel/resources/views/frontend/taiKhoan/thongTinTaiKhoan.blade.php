@extends('layout.main')
@section('container')
    <main class="main">
        <div class="page-header">
            <div class="container d-flex flex-column align-items-center">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('trang-chu.home') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item">Tài khoản</li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin tài khoản </li>
                        </ol>
                    </div>
                </nav>

                <h1>Tài khoản của tôi</h1>
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

        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-10 mx-auto card">
                    <div class="row card-body shadow">
                        <div class="col-md-12">

                            <form action="{{route('tai-khoan.cap-nhat-tai-khoan')}}" method="post">
                                @csrf
                                <div class="mt-3">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-input form-wide" name="ho_va_ten" value="{{ old('ho_va_ten', Auth::user()->ho_va_ten) }}" />
                                    @error('ho_va_ten')
                                        <p class="Err text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-input form-wide" name="so_dien_thoai" value="{{ old('so_dien_thoai', Auth::user()->so_dien_thoai) }}" />
                                    @error('so_dien_thoai')
                                        <p class="Err text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-input form-wide" name="dia_chi" value="{{ old('dia_chi', Auth::user()->dia_chi) }}" />
                                    @error('dia_chi')
                                        <p class="Err text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    @php
                                        $email=Auth::user()->email
                                    @endphp
                                    <label>Email</label>
                                    <input type="text" class="form-input form-wide" value="<?= substr($email, 0, 2) . str_repeat('*', strlen($email) - 2) . substr($email, strpos($email, '@')); ?>" disabled/>
                                </div>

                                <div class="form-footer">
                                    <a href="{{ route('tai-khoan.quen-mat-khau') }}"
                                        class="forget-password text-dark form-footer-right">Quên mật khẩu?</a>
                                </div>
                                <button type="submit" class="btn btn-dark btn-md">
                                    Lưu tài khoản
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->
@endsection
