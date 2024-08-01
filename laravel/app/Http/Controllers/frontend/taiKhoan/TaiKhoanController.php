<?php

namespace App\Http\Controllers\frontend\taiKhoan;

use App\Models\User;
use Illuminate\Support\Str;
use App\Mail\UserRegistered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DangKyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DangNhapRequest;
use App\Mail\ResetPassword;

class TaiKhoanController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function showDangNhap()
    {
        return view('frontend.taiKhoan.dangNhap');
    }

    public function showDangKy()
    {
        return view('frontend.taiKhoan.dangKy');
    }

    public function showQuenMatKhau()
    {
        return view('frontend.taiKhoan.quenMatKhau');
    }

    public function quenMatKhau(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|exists:users,email',
            ],
            [
                'email.required' => 'Vui lòng nhập địa chỉ email!',
                'email.email' => 'Địa chỉ email không hợp lệ!',
                'email.exists' => 'Địa chỉ email chưa được đăng ký!',
            ]
        );

        $user = User::where('email', $request->email)->firstOrFail();
        $token = Str::random(10);

        if ($user->update(['password_reset_token' => $token])) {
            Mail::to($user->email)->send(new ResetPassword($user, $token));
            return redirect()->back()->with('success', 'Đã gửi liên kết đặt lại mật khẩu vào email của bạn.');
        }
        return redirect()->back()->with('error', 'Lỗi khi gửi dữ liệu ! Vui lòng thử lại sau ít phút.');
    }

    public function showDatLaiMatKhau($token)
    {
        $user = User::where('password_reset_token', $token)->firstOrFail();
        if($user){
            return view('frontend.taiKhoan.datLaiMatKhau', ['token' => $token]);
        }else{
            return redirect()->route('trang-chu.home');
        }

    }

    public function datLaiMatKhau(Request $request)
    {
        $request->validate(
            [
            'password' => 'required|string|min:6',
            'confirm_password' => 'same:password',
            ],
            [
                'password.required' => 'Vui lòng nhập mật khẩu !',
                'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự !',
                'confirm_password.same' => 'Mật khẩu xác nhận không khớp !',
            ]
    );

        $user = User::where('password_reset_token', $request->token)->firstOrFail();
        if($user){
            $user->update([
                'password' => Hash::make($request->password),
                'password_reset_token' => null,
            ]);
            return redirect()->route('tai-khoan.dang-nhap')->with('success', 'Mật khẩu của bạn đã được thay đổi thành công.');
        }
        return redirect()->route('tai-khoan.dang-nhap')->with('error', 'Mật khẩu thay đổi không thành công.');

    }

    public function dangNhap(DangNhapRequest $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->trang_thai == 0) {
                return redirect()->route('trang-chu.home');
            } elseif (Auth::user()->trang_thai == 2) {
                Auth::logout();
                return redirect()->back()->with('error', 'Tài khoản của bạn chưa được xác thực !')->withInput();;
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Tài khoản của bạn đã bị khóa ! Xin vui lòng đăng nhập bằng tài khoản khác.');
            }
        }


        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác.');
    }

    public function dangKy(DangKyRequest $request)
    {
        $dataInsert = [
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verification_token' => Str::random(10),
            'trang_thai' => 2,
            'created_at' => now(),
        ];
        $user = User::create($dataInsert);
        if ($user) {
            Mail::to($user->email)->send(new UserRegistered($user));

            return redirect()->route('tai-khoan.dang-nhap')->with('success', 'Bạn đã đăng ký tài khoản thành công! Vui lòng kiểm tra email để xác nhận.');
        } else {
            return redirect()->back()->with('error', 'Không thể đăng ký tài khoản. Vui lòng thử lại.');
        }
    }

    public function verifyEmail($token)
    {
        $user = User::where('email_verification_token', $token)
            ->whereNull('email_verified_at')
            ->firstOrFail();

        if (!$user) {
            return redirect()->route('tai-khoan.dang-nhap')
                ->with('error', 'Xác thực email không hợp lệ hoặc đã được thực hiện.');
        }

        if (User::where('email_verification_token', $token)
            ->whereNull('email_verified_at')->update(['email_verified_at' => now(), 'email_verification_token' => null])
        ) {
            return redirect()->route('tai-khoan.dang-nhap')
                ->with('success', 'Email đã được xác nhận thành công! Mời bạn đăng nhập.');
        }
    }

    public function guiLaiEmail($email)
    {
        $user = User::where('email', $email)->whereNull('email_verified_at')->firstOrFail();

        if ($user) {
            $user->email_verification_token = Str::random(10);
            $user->trang_thai = 0;
            $user->save();

            Mail::to($user->email)->send(new UserRegistered($user));

            return redirect()->back()->with('success', 'Email xác thực đã được gửi lại. Vui lòng kiểm tra email của bạn.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy tài khoản với email này.');
    }

    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('tai-khoan.dang-nhap');
    }
}
