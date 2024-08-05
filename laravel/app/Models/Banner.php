<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'banners';
    protected $fillable = [
        'san_pham_id',
        'hinh_anh',
    ];
    public $timestamps = false;
    public function loadAllBanners(){
        $query = DB::table('banners')
        ->orderBy('id','desc')
        ->paginate(10);

        return $query;
    }
    public function searchBanners($keyword){
        $query = DB::table('banners')
            ->where('created_at', 'LIKE', "%$keyword%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return $query;
    }
    public function loadAllSanPham(){
        $query = DB::table('san_phams')->get();

        return $query;
    }
    public function loadOneBanners($id){
        $query= DB::table('banners')->find($id);
        return $query;
    }
    public function addBanners($data){
        DB::table('banners')->insert($data);
    }
    public function updateBanners($data, $id){
        DB::table('banners')->where('id',$id)->update($data);
    }
    public function deleteBanners($id){
        DB::table('banners')
        ->where('id',$id)
        ->delete();
    }
}
