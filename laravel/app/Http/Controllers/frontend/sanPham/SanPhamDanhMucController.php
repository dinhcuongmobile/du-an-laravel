<?php

namespace App\Http\Controllers\frontend\sanPham;

use App\Models\DanhMuc;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use Illuminate\Support\Facades\Auth;

class SanPhamDanhMucController extends Controller
{
    protected $views;
    protected $san_phams;
    protected $danh_mucs;
    protected $binh_luans;
    public function __construct() {
        $this->views=[];
        $this->san_phams=new SanPham();
        $this->danh_mucs=new DanhMuc();
        $this->binh_luans=new BinhLuan();
    }

    public function show(Request $request){
        if($request->has('locTheoGia')){
            $minPrice = $request->input('min_price');
            $maxPrice = $request->input('max_price');
            $this->views['minPrice']=$minPrice;
            $this->views['maxPrice']=$maxPrice;
            $this->views['san_phams'] = $this->san_phams->locTheoGiaAll($minPrice,$maxPrice);
        }else{
            $this->views['minPrice']=0;
            $this->views['maxPrice']=100000000;
            $this->views['san_phams']=$this->san_phams->loadAllSanPham();
        }
        $this->views['danh_mucs']=$this->danh_mucs->loadAllDanhMuc();
        $this->views['count_danh_muc']=$this->san_phams->countSanPhamDanhMuc();
        return view('frontend.sanPham.DanhMuc',$this->views);
    }

    public function sanPhamDanhMuc(int $id){
        $this->views['san_phams']=$this->san_phams->loadSanPhamDanhMuc($id);
        $this->views['count_danh_muc']=$this->san_phams->countSanPhamDanhMuc();
        return view('frontend.sanPham.sanPhamDanhMuc',$this->views);
    }


    public function chiTietSanPham(int $id){
        $san_pham=$this->san_phams->loadOneSanPham($id);
        $this->views['san_pham']= $san_pham;
        $this->views['san_phams']=$this->san_phams->loadSanPhamDanhMuc($san_pham->danh_muc_id);
        $this->views['danh_muc']=$this->danh_mucs->loadOneDanhMuc($san_pham->danh_muc_id);
        $this->views['binh_luans']=$this->binh_luans->loadBinhLuanChiTiet($san_pham->id);
        $this->views['count_binh_luan'] = BinhLuan::where('san_pham_id', $san_pham->id)->count();
        return view('frontend.sanPham.chiTietSanPham',$this->views);
    }

    public function binhLuan(Request $request, int $id){
        $data=[
            'tai_khoan_id' => Auth::user()->id,
            'san_pham_id' => $id,
            'noi_dung' => $request->input('noidung'),
            'created_at' => now(),
        ];
        $this->binh_luans->addBinhLuan($data);
    }
}
