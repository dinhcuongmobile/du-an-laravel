<?php

namespace App\Providers;

use App\Models\DanhMuc;
use Illuminate\Pagination\Paginator;
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

            // Chia sẻ dữ liệu với view
            $view->with('danh_mucs', $danh_mucs);
        });

    }
}
