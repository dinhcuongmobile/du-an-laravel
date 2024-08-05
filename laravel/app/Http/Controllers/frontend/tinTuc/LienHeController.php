<?php

namespace App\Http\Controllers\frontend\tinTuc;

use App\Http\Controllers\Controller;
use App\Models\LienHe;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
    protected $lien_hes;
    protected $views;
    public function __construct() {
        $this->views=[];
        $this->lien_hes=new LienHe();
    }

    public function show(){
        return view('frontend.tinTuc.lienHe');
    }

    public function guiLienHe(Request $request){
        $data=[
            'ho_va_ten' => $request->input('ho_va_ten'),
            'email'=> $request->input('email'),
            'so_dien_thoai'=> $request->input('so_dien_thoai'),
            'noi_dung'=> $request->input('noi_dung'),
            'trang_thai'=> 0,
            'created_at'=>now()
        ];
        $this->lien_hes->addLienHe($data);
    }
}
