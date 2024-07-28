<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BinhLuan extends Model
{
    use HasFactory;

    public function loadAllBinhLuan(){
        $query=DB::table('binh_luans')
        ->join('tai_khoans','binh_luans.tai_khoan_id','=','tai_khoans.id')
        ->join('san_phams','binh_luans.san_pham_id','=','san_phams.id')
        ->select('binh_luans.*','tai_khoans.ho_va_ten','tai_khoans.ten_dang_nhap','san_phams.ten_san_pham')
        ->orderBy('id','desc')
        ->paginate(10);

        return $query;
    }

    public function loadOneBinhLuan($id){
        $query=DB::table('binh_luans')->find($id);

        return $query;
    }

    public function deleteBinhLuan($id){
        DB::table('binh_luans')->where('id',$id)->delete();
    }
}
