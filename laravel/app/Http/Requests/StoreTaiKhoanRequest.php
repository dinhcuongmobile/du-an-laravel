<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaiKhoanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap' => 'required|string|max:255|unique:tai_khoans,ten_dang_nhap',
            'mat_khau' => 'required|string|min:6',
            'email' => 'required|email|unique:tai_khoans,email',
            'so_dien_thoai' => 'required|string|max:10',
            'dia_chi' => 'required|string|max:255',
            'role' => 'required|integer|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng không bỏ trống tên đăng nhập!',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại!',
            'mat_khau.required' => 'Vui lòng không bỏ trống mật khẩu!',
            'mat_khau.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
            'email.required' => 'Vui lòng không bỏ trống email!',
            'email.email' => 'Email không hợp lệ!',
            'email.unique' => 'Email đã tồn tại!',
            'so_dien_thoai.required' => 'Vui lòng không bỏ trống số điện thoại!',
            'dia_chi.required' => 'Vui lòng không bỏ trống địa chỉ!',
            'role.required' => 'Vui lòng chọn vai trò!',
            'role.in' => 'Vai trò không hợp lệ!',
        ];
    }
}
