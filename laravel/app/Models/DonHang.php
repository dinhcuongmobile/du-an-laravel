<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DonHang extends Model
{
    use HasFactory;

    protected $table = 'don_hangs';
    protected $fillable = [
        'tai_khoan_id',
        'ho_ten_nhan',
        'ngay_dat_hang',
        'dia_chi_nhan',
        'so_dt_nhan',
        'tong_thanh_toan',
        'phuong_thuc_tt',
        'trang_thai',
        'thanh_toan',
    ];
    public $timestamps = false;

    public function addDonHang($data){
        DB::table('don_hangs')->insert($data);
    }
}
