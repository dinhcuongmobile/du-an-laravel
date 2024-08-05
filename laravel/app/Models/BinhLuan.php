<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BinhLuan extends Model
{
    use HasFactory;

    protected $table = 'binh_luans';
    protected $fillable = [
        'tai_khoan_id',
        'san_pham_id',
        'noi_dung',
    ];
    public $timestamps = false;

    public function loadAllBinhLuan(){
        $query=DB::table('binh_luans')
        ->join('users','binh_luans.tai_khoan_id','=','users.id')
        ->join('san_phams','binh_luans.san_pham_id','=','san_phams.id')
        ->select('binh_luans.*','users.ho_va_ten','users.email','san_phams.ten_san_pham')
        ->orderBy('id','desc')
        ->paginate(10);

        return $query;
    }
    public function loadBinhLuanChiTiet($san_pham_id){
        $query=DB::table('binh_luans')
        ->join('users','binh_luans.tai_khoan_id','=','users.id')
        ->join('san_phams','binh_luans.san_pham_id','=','san_phams.id')
        ->select('binh_luans.*','users.ho_va_ten')
        ->where('binh_luans.san_pham_id', $san_pham_id)
        ->orderBy('id','desc')
        ->get();

        return $query;
    }
    public function searchBinhLuan($keyword){
        $query = DB::table('binh_luans')
            ->join('users','binh_luans.tai_khoan_id','=','users.id')
            ->join('san_phams','binh_luans.san_pham_id','=','san_phams.id')
            ->select('binh_luans.*','users.ho_va_ten','users.email','san_phams.ten_san_pham')
            ->where('users.email', 'LIKE', "%$keyword%")
            ->orWhere('san_phams.ten_san_pham', 'LIKE', "%$keyword%")
            ->orWhere('binh_luans.noi_dung', 'LIKE', "%$keyword%")
            ->orWhere('binh_luans.created_at', 'LIKE', "%$keyword%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return $query;
    }
    public function loadOneBinhLuan($id){
        $query=DB::table('binh_luans')->find($id);

        return $query;
    }

    public function addBinhLuan($data){
        DB::table('binh_luans')->insert($data);
    }

    public function deleteBinhLuan($id){
        DB::table('binh_luans')->where('id',$id)->delete();
    }
}
