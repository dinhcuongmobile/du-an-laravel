<?php

namespace App\Http\Controllers\frontend\sanPham;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SanPhamDanhMucController extends Controller
{
    public function __construct() {
        
    }

    public function show(){
        return view('frontend.sanPham.sanPhamDanhMuc');
    }
}
