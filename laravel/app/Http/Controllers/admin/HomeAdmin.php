<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use App\Models\DonHang;
use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;

class HomeAdmin extends Controller
{
    protected $views;
    protected $binh_luans;
    protected $don_hangs;
    protected $san_phams;
    protected $users;
    public function __construct() {
        $this->views=[];
        $this->binh_luans=new BinhLuan();
        $this->don_hangs=new DonHang();
        $this->san_phams=new SanPham();
        $this->users=new User();
    }

    public function homeAdmin(){
        $this->views['countDonHang']=DonHang::count();
        $this->views['countBinhLuan']=BinhLuan::count();
        $this->views['countThanhVien']=User::where('trang_thai',0)->where('role',1)->count();
        $san_phams=SanPham::get();
        $tong=0;
        foreach ($san_phams as $item) {
            $tong+=$item->luot_xem;
        }
        $this->views['countNguoiXem']=$tong;
        return view('admin.admin', $this->views);
    }
}
