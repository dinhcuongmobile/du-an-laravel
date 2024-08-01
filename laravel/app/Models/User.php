<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'ho_va_ten', 'email', 'password', 'so_dien_thoai', 'dia_chi', 'role', 'trang_thai'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public $timestamps = false;
    // Load all users with pagination
    public function loadAllTaiKhoan(){
        return User::orderBy('id', 'desc')->paginate(10);
    }

    // Search users by keyword
    public function searchTaiKhoan($keyword){
        return User::where('ho_va_ten', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orWhere('so_dien_thoai', 'LIKE', "%$keyword%")
                    ->orderBy('id', 'desc')
                    ->paginate(10);
    }

    // Add a new user
    public function addTaiKhoan($data){
        DB::table('users')->insert($data);
    }

    // Update a user by id
    public function updateTaiKhoan($data, $id){
        $user = User::find($id);
        if ($user) {
            $user->update($data);
        }
    }
}
