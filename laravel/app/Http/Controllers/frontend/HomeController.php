<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\DanhMuc;
use App\Models\SanPham;
use App\Models\TinTuc;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $views;
    protected $san_phams;
    protected $danh_mucs;
    protected $tin_tucs;
    protected $banners;

    public function __construct() {
        $this->views=[];
        $this->san_phams=new SanPham();
        $this->danh_mucs=new DanhMuc();
        $this->tin_tucs=new TinTuc();
        $this->banners=new Banner();
    }

    public function home(){
        $this->views['banners']=$this->banners->loadAllBanners();
        $this->views['danh_mucs']=$this->danh_mucs->loadAllDanhMuc();
        $this->views['san_pham_noi_bat']=$this->san_phams->loadSanPhamNoiBat();
        $this->views['san_pham_moi_nhat']=$this->san_phams->loadSanPhamMoiNhat();
        $this->views['tin_tucs']=$this->tin_tucs->loadAllTinTuc();
        return view('frontend.home',$this->views);
    }
}
