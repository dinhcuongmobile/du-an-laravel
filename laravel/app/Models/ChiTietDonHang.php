<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;

    protected $table = 'chi_tiet_don_hangs';
    protected $fillable = [
        'don_hang_id',
        'san_pham_id',
        'so_luong',
        'don_gia',
        'thanh_tien',
    ];
    public $timestamps = false;
}
