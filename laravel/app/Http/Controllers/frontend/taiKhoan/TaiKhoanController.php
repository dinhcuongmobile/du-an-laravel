<?php

namespace App\Http\Controllers\frontend\taiKhoan;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DangKyRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DangNhapRequest;

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

    public function DangNhap(DangNhapRequest $request){

    }

    public function DangKy(DangKyRequest $request){
        $dataInsert = [
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'password' => Hash::make($request->mat_khau),
            'created_at' => now(),
        ];
        $result = $this->userModel->addTaiKhoan($dataInsert);
        if(!$result){
                return redirect()->route('tai-khoan.dang-nhap')->with('success', 'Bạn đã đăng ký tài khoản thành công !');
        } else {
            return redirect()->back()
                             ->with('error', 'Không thể đăng ký tài khoản. Vui lòng thử lại.');
        }
    }
}
