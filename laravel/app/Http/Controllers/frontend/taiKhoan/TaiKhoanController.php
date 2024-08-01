<?php

namespace App\Http\Controllers\frontend\taiKhoan;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DangKyRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DangNhapRequest;
use Illuminate\Support\Facades\Auth;

class TaiKhoanController extends Controller
{
    protected $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function showDangNhap(){
        return view('frontend.taiKhoan.dangNhap');
    }

    public function showDangKy(){
        return view('frontend.taiKhoan.dangKy');
    }

    public function showQuenMatKhau(){

    }

    public function showResetMatKhau(){

    }

    public function DangNhap(Request $request){
        // Thực hiện xác thực người dùng với thông tin email và password

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Đăng nhập thành công, điều hướng đến trang chủ
            return redirect()->route('trang-chu.home');
        }

        // Nếu xác thực thất bại, quay lại trang đăng nhập với thông báo lỗi
        return redirect()->route('tai-khoan.dang-nhap')
                         ->with('error', 'Thông tin đăng nhập không chính xác.');
    }

    public function DangKy(DangKyRequest $request){
        $dataInsert = [
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
        ];
        $result = $this->userModel->addTaiKhoan($dataInsert);
        if(!$result){
                return redirect()->route('tai-khoan.dang-nhap')->with('success', 'Bạn đã đăng ký tài khoản thành công !');
        } else {
            return redirect()->back()->with('error', 'Không thể đăng ký tài khoản. Vui lòng thử lại.');
        }
    }
}
