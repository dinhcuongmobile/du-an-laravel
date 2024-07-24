<?php

namespace App\Http\Controllers\frontend\tinTuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function __construct() {
        
    }

    public function show(){
        return view('frontend.tinTuc.tinTuc');
    }
}
