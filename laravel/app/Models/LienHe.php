<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LienHe extends Model
{
    use HasFactory;

    protected $table = 'lien_hes';
    protected $fillable = [
        'ho_va_ten',
        'email',
        'so_dien_thoai',
        'noi_dung',
        'trang_thai',
    ];
    public $timestamps = false;

    public function addLienHe($data){
        DB::table('lien_hes')->insert($data);
    }
}
