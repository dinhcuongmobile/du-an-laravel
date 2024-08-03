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
            'ho_va_ten' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'confirm_password' => 'same:password',
            'email' => 'required|email|unique:users,email',
            'so_dien_thoai' => 'nullable|numeric|max:10|regex:/^0[1-9][0-9]{8}$/',
            'dia_chi' => 'nullable|string|max:255',
            'role' => 'required|integer|in:0,1',

        ];
    }

    public function messages()
    {
        return [
            'ho_va_ten.required' => 'Vui lòng không bỏ trống Họ và Tên!',
            'ho_va_ten.max' => 'Họ và tên quá dài!',
            'password.required' => 'Vui lòng không bỏ trống mật khẩu!',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
            'confirm_password.same' => 'Mật khẩu xác nhận không khớp !',
            'email.required' => 'Vui lòng không bỏ trống email!',
            'email.email' => 'Email không hợp lệ!',
            'email.unique' => 'Email đã tồn tại!',
            'so_dien_thoai.numeric' => 'Số điện thoại phải là số!',
            'so_dien_thoai.max' => 'Số điện thoại không được vượt quá 11 ký tự!',
            'so_dien_thoai.regex' => 'Số điện thoại không hợp lệ!',
            'dia_chi.max' => 'Địa chỉ quá dài!',
            'role.required' => 'Vui lòng chọn vai trò!',
            'role.in' => 'Vai trò không hợp lệ!',
        ];
    }
}
