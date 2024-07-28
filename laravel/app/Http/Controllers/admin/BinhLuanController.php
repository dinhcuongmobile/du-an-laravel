<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BinhLuan;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    protected $binh_luans;
    protected $views;

    public function __construct() {
        $this->binh_luans = new BinhLuan();
        $this->views=[];
    }

    //SHOW
    public function showDanhSach(){
        $this->views['DSBinhLuan'] = $this->binh_luans->loadAllBinhLuan();
        return view('admin.binhLuan.DSBinhLuan',$this->views);
    }

    //delete
    public function delete($id){
        $binh_luan=$this->binh_luans->loadOneBinhLuan($id);
        if($binh_luan){
            $this->binh_luans->deleteBinhLuan($id);
            return redirect()->route('binh-luan.danh-sach');
        }

    }

    public function xoaNhieuBinhLuan(Request $request){
        foreach($request->select as $id){
            $binh_luan=$this->binh_luans->loadOneBinhLuan($id);
            if($binh_luan){
                $this->binh_luans->deleteBinhLuan($id);
            }else{
                return redirect()->route('admin.index');
            }
        }
        return redirect()->route('binh-luan.danh-sach');
    }
}
