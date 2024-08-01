<?php

namespace App\Http\Controllers\admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;

class BannerAdminController extends Controller
{
    protected $Banner;
    protected $views;
    public function __construct() {
       $this->Banner = new Banner();
       $this->views=[];
    }

    //SHOW
    public function showDanhSach(Request $request){
        $keyword = $request->input('kyw');
        if ($keyword) {
            $this->views['DSBanner'] = $this->Banner->searchBanners($keyword);
        } else {
            $this->views['DSBanner'] = $this->Banner->loadAllBanners();
        }
        return view('admin.banner.DSBanner',$this->views);
    }

    //add
    public function viewAdd(){
        $this->views['san_phams']=$this->Banner->loadAllSanPham();
        return view('admin.banner.add',$this->views);
    }

    public function add(StoreBannerRequest $request){
        if($request->hasFile('hinh_anh')){
            $fileName=$request->file('hinh_anh')->store('uploads/banner','public');
        }else{
            $fileName=null;
        }

        $dataInsert=[
            'san_pham_id' => $request->san_pham_id,
            'hinh_anh' => $fileName,
            'created_at' => now()
        ];
        $result=$this->Banner->addBanners($dataInsert);
        if(!$result){
            return redirect()->route('banner.danh-sach');
        }else{
            return redirect()->route('banner.them-banner');
        }
    }

    //update
    public function viewUpdate(int $id){
        $this->views['banner']=$this->Banner->loadOneBanners($id);
        $this->views['san_phams']=$this->Banner->loadAllSanPham();
        return view('admin.banner.update',$this->views);
    }

    public function update(UpdateBannerRequest $request, int $id){
        $banner=$this->Banner->loadOneBanners($id);
        if($banner){
            if($request->hasFile('hinh_anh')){
                $fileName=$request->file('hinh_anh')->store('uploads/banner','public');

                if ($banner->hinh_anh) {
                    Storage::disk('public')->delete($banner->hinh_anh);
                }
            }else{
                $fileName=$banner->hinh_anh;
            }

            $dataUpdate=[
                'san_pham_id' => $request->san_pham_id,
                'hinh_anh' => $fileName,
                'updated_at' => now()
            ];
            $result=$this->Banner->updateBanners($dataUpdate,$id);
            if(!$result){
                return redirect()->route('banner.danh-sach');
            }
        }else{
            return redirect()->route('banner.danh-sach')->withErrors('Có lỗi xảy ra, vui lòng thử lại');
        }
    }

    public function delete(int $id){
        $banner=$this->Banner->loadOneBanners($id);
        if($banner){
            $this->Banner->deleteBanners($id);
            if ($banner->hinh_anh) {
                Storage::disk('public')->delete($banner->hinh_anh);
            }
            return redirect()->route('banner.danh-sach');
        }else{
            return redirect()->route('banner.danh-sach')->withErrors('Có lỗi xảy ra, vui lòng thử lại');
        }
    }

    public function xoaNhieuBanner(Request $request){
        foreach($request->select as $id){
            $banner=$this->Banner->loadOneBanners($id);
            if($banner){
                $this->Banner->deleteBanners($id);
                if ($banner->hinh_anh) {
                    Storage::disk('public')->delete($banner->hinh_anh);
                }
            }else{
                break;
            }
        }
        return redirect()->route('banner.danh-sach');
    }
}
