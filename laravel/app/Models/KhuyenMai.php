<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;
    protected $table = 'khuyen_mais';
    protected $fillable = [
        'id',
        'san_pham_id',
        'ma_giam_gia',
        'phan_tram_giam',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'mo_ta',
    ];
    public $timestamps = false;

    public function loadAllGiamGia(){

    }
}
