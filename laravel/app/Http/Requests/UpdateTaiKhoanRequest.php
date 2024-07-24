<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaiKhoanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('id');
        return [
            'ten_dang_nhap' => 'required|string|max:255|min:6|unique:tai_khoans,ten_dang_nhap,' . $id,
            'mat_khau' => 'required|string|min:6',
            'email' => 'required|email|max:255|unique:tai_khoans,email,' . $id,
            'so_dien_thoai' => 'required|string|max:15',
            'dia_chi' => 'string|max:255',
            'role' => 'required|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'ten_dang_nhap.required' => 'Vui lòng không bỏ trống tên đăng nhập!',
            'ten_dang_nhap.unique' => 'Tên đăng nhập đã tồn tại!',
            'ten_dang_nhap.min' => 'Tên đăng nhập phải có ít nhất 6 ký tự!',
            'mat_khau.required' => 'Vui lòng không bỏ trống mật khẩu!',
            'mat_khau.min' => 'Mật khẩu phải có ít nhất 6 ký tự!',
            'email.required' => 'Vui lòng không bỏ trống email!',
            'email.email' => 'Email không hợp lệ!',
            'email.unique' => 'Email đã tồn tại!',
            'so_dien_thoai.required' => 'Vui lòng không bỏ trống số điện thoại!',
            'role.required' => 'Vui lòng chọn vai trò!',
            'role.in' => 'Vai trò không hợp lệ!',
        ];
    }
}

