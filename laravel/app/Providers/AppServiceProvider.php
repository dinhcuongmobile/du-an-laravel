<?php

namespace App\Providers;

use App\Models\DanhMuc;
use App\Models\DonHang;
use App\Models\GioHang;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();

        View::composer('layout.main', function ($view) {
            // Lấy dữ liệu từ model
            $danh_mucs = DanhMuc::all();
            $gioHangModel = new GioHang();

            //goi ham
            if(Auth::check()){
                $gio_hangs_count = $gioHangModel->countGioHang();
                $view->with('gio_hangs_count', $gio_hangs_count);
            }
            // Chia sẻ dữ liệu với view
            $view->with('danh_mucs', $danh_mucs);
        });

        //admin
        View::composer('admin.layout.main', function ($view) {
            // Lấy dữ liệu từ model
            $sub=DonHang::where('trang_thai',0)->count();


            // Chia sẻ dữ liệu với view
            $view->with('sub', $sub);
        });

    }
}
