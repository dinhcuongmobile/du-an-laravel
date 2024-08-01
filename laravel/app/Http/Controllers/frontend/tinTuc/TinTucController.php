<?php

namespace App\Http\Controllers\frontend\tinTuc;

use App\Models\TinTuc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TinTucController extends Controller
{
    protected $tin_tucs;
    protected $views;
    public function __construct() {
        $this->tin_tucs=new TinTuc();
        $this->views=[];
    }

    public function show(){
        $this->views['tin_tucs']=$this->tin_tucs->loadAllTinTuc();
        $this->views['tin_tuc_gan_day']=$this->tin_tucs->loadTinTucGanDay();
        return view('frontend.tinTuc.tinTuc',$this->views);
    }

    public function chiTietTinTuc(int $id){
        $this->views['tin_tuc']=$this->tin_tucs->loadOneTinTuc($id);
        $this->views['tin_tucs']=$this->tin_tucs->loadAllTinTuc();
        $this->views['tin_tuc_gan_day']=$this->tin_tucs->loadTinTucGanDay();
        return view('frontend.tinTuc.chiTietTinTuc',$this->views);
    }
}
