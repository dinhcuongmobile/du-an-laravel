<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\taiKhoan\TaiKhoanController;
use App\Http\Controllers\frontend\gioHang\GioHangController;
use App\Http\Controllers\frontend\sanPham\SanPhamDanhMucController;
use App\Http\Controllers\frontend\tinTuc\TinTucController;
use App\Http\Controllers\admin\HomeAdmin;
use App\Http\Controllers\admin\TaiKhoanAdminController;
use App\Http\Controllers\admin\SanPhamAdminController;
use App\Http\Controllers\admin\DanhMucAdminController;
use App\Http\Controllers\admin\BannerAdminController;
use App\Http\Controllers\admin\BinhLuanController;
use App\Http\Controllers\admin\TinTucAdminController;
use App\Http\Controllers\admin\DonHangAdminController;
use App\Http\Controllers\frontend\tinTuc\LienHeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//client
Route::get('/', [HomeController::class,'home'])->name('trang-chu.home');

Route::prefix('tai-khoan')->group(function(){

    Route::get('dang-nhap', [TaiKhoanController::class,'showDangNhap'])->name('tai-khoan.dang-nhap')->middleware('checkUser');
    Route::post('dang-nhap', [TaiKhoanController::class,'dangNhap'])->name('tai-khoan.dang-nhap');

    Route::get('dang-ky', [TaiKhoanController::class,'showDangKy'])->name('tai-khoan.dang-ky')->middleware('checkUser');
    Route::post('dang-ky', [TaiKhoanController::class,'dangKy'])->name('tai-khoan.dang-ky');
    Route::get('verify-email/{token}', [TaiKhoanController::class, 'verifyEmail'])->name('tai-khoan.verify-email');
    Route::get('gui-lai-email/{email}', [TaiKhoanController::class, 'guiLaiEmail'])->name('tai-khoan.gui-lai-email');

    Route::get('quen-mat-khau', [TaiKhoanController::class,'showQuenMatKhau'])->name('tai-khoan.quen-mat-khau');
    Route::post('quen-mat-khau', [TaiKhoanController::class, 'quenMatKhau'])->name('tai-khoan.quen-mat-khau');

    Route::get('dat-lai-mat-khau/{token}', [TaiKhoanController::class, 'showDatLaiMatKhau'])->name('tai-khoan.dat-lai-mat-khau');
    Route::post('doi-mat-khau', [TaiKhoanController::class, 'datLaiMatKhau'])->name('tai-khoan.doi-mat-khau');

    Route::get('dang-xuat', [TaiKhoanController::class,'dangXuat'])->name('tai-khoan.dang-xuat');

    Route::get('thong-tin-tai-khoan', [TaiKhoanController::class,'thongTinTaiKhoan'])->name('tai-khoan.thong-tin-tai-khoan')->middleware('auth');
    Route::post('cap-nhat-tai-khoan', [TaiKhoanController::class,'capNhatTaiKhoan'])->name('tai-khoan.cap-nhat-tai-khoan');
});


Route::prefix('gio-hang')->middleware('auth')->group(function(){
    Route::get('show', [GioHangController::class,'showGioHang'])->name('gio-hang.show');
    Route::get('chi-tiet-thanh-toan', [GioHangController::class,'showChiTietThanhToan'])->name('gio-hang.chi-tiet-thanh-toan');
    Route::post('tiep-tuc-dat-hang', [GioHangController::class,'tiepTucDatHang'])->name('gio-hang.tiep-tuc-dat-hang');
    Route::post('xac-nhan-dat-hang', [GioHangController::class,'xacNhanDatHang'])->name('gio-hang.xac-nhan-dat-hang');

    Route::get('thanh-toan-vnp', [GioHangController::class,'showThanhToanVNP'])->name('gio-hang.thanh-toan-vnp');
    Route::post('vnpay_create_payment', [GioHangController::class,'vnpay_create_payment'])->name('gio-hang.vnpay_create_payment');
    Route::post('thanh-toan-online', [GioHangController::class,'thanhToanOnline'])->name('gio-hang.thanh-toan-online');
    Route::get('vnpay_return', [GioHangController::class,'vnpay_return'])->name('gio-hang.vnpay_return');

    Route::get('xoa-san-pham/{id}', [GioHangController::class,'xoaSanPhamGioHang'])->name('gio-hang.xoa-san-pham');
    Route::get('don-mua', [GioHangController::class,'donMua'])->name('gio-hang.don-mua');
    Route::post('mua-lai', [GioHangController::class,'muaLaiSanPham'])->name('gio-hang.mua-lai');
    Route::put('da-nhan-hang/{id}', [GioHangController::class,'daNhanHang'])->name('gio-hang.da-nhan-hang');
    Route::post('them-gio-hang', [GioHangController::class,'addGioHang'])->name('gio-hang.them-gio-hang');
    Route::post('them-gio-hang-chi-tiet', [GioHangController::class,'themGioHangChiTiet'])->name('gio-hang.them-gio-hang-chi-tiet');
    Route::put('cap-nhat-gio-hang/{id}', [GioHangController::class,'capNhatGioHang'])->name('gio-hang.cap-nhat-gio-hang');
    Route::get('huy-don-hang/{id}', [GioHangController::class,'huyDonHang'])->name('gio-hang.huy-don-hang');
    Route::get('chi-tiet-huy-don/{id}', [GioHangController::class,'chiTietHuyDon'])->name('gio-hang.chi-tiet-huy-don');

});

Route::prefix('san-pham')->group(function(){
    Route::get('danh-muc', [SanPhamDanhMucController::class,'show'])->name('san-pham.danh-muc');
    Route::get('san-pham-danh-muc/{id}', [SanPhamDanhMucController::class,'sanPhamDanhMuc'])->name('san-pham.san-pham-danh-muc');
    Route::get('chi-tiet-san-pham/{id}', [SanPhamDanhMucController::class,'chiTietSanPham'])->name('san-pham.chi-tiet-san-pham');
    Route::post('binh-luan/{id}', [SanPhamDanhMucController::class,'binhLuan'])->name('san-pham.binh-luan');
});

Route::prefix('tin-tuc')->group(function(){
    Route::get('show', [TinTucController::class,'show'])->name('tin-tuc.show');
    Route::get('chi-tiet/{id}', [TinTucController::class,'chiTietTinTuc'])->name('tin-tuc.chi-tiet');
});

Route::prefix('lien-he')->group(function(){
    Route::get('show', [LienHeController::class,'show'])->name('lien-he.show');
    Route::post('gui-lien-he', [LienHeController::class,'guiLienHe'])->name('lien-he.gui-lien-he');
});

//admin
Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('index', [HomeAdmin::class,'homeAdmin'])->name('admin.index');

    Route::prefix('tai-khoan')->group(function(){
        Route::get('danh-sach-QTV', [TaiKhoanAdminController::class,'showTaiKhoanQTV'])->name('tai-khoan.danh-sach-QTV');
        Route::put('select-khoa-TK', [TaiKhoanAdminController::class,'selectKhoaTK'])->name('tai-khoan.select-khoa-TK');
        Route::get('danh-sach-TV', [TaiKhoanAdminController::class,'showTaiKhoanTV'])->name('tai-khoan.danh-sach-TV');
        Route::get('danh-sach-TKK', [TaiKhoanAdminController::class,'showTaiKhoanTKK'])->name('tai-khoan.danh-sach-TKK');

        //add
        Route::get('them-tai-khoan', [TaiKhoanAdminController::class,'viewAdd'])->name('tai-khoan.them-tai-khoan');
        Route::post('add', [TaiKhoanAdminController::class,'add'])->name('tai-khoan.add');

        //update
        Route::get('sua-tai-khoan/{id}', [TaiKhoanAdminController::class,'viewUpdate'])->name('tai-khoan.sua-tai-khoan');
        Route::put('update/{id}', [TaiKhoanAdminController::class,'update'])->name('tai-khoan.update');
        Route::get('khoa-tai-khoan/{id}', [TaiKhoanAdminController::class,'khoaTaiKhoan'])->name('tai-khoan.khoa-tai-khoan');
        Route::get('mo-khoa-tai-khoan/{id}', [TaiKhoanAdminController::class,'moKhoaTaiKhoan'])->name('tai-khoan.mo-khoa-tai-khoan');
    });

    //Danh Muc
    Route::prefix('danh-muc')->group(function(){
        Route::get('danh-sach', [DanhMucAdminController::class,'showDanhSach'])->name('danh-muc.danh-sach');
        //add
        Route::get('them-danh-muc', [DanhMucAdminController::class,'viewAdd'])->name('danh-muc.them-danh-muc');
        Route::post('add', [DanhMucAdminController::class,'add'])->name('danh-muc.add');

        //update
        Route::get('sua-danh-muc/{id}', [DanhMucAdminController::class,'viewUpdate'])->name('danh-muc.sua-danh-muc');
        Route::put('update/{id}', [DanhMucAdminController::class,'update'])->name('danh-muc.update');

        //delete
        Route::get('delete/{id}', [DanhMucAdminController::class,'delete'])->name('danh-muc.delete');

        Route::post('xoa-nhieu', [DanhMucAdminController::class,'xoaNhieuDanhMuc'])->name('danh-muc.xoa-nhieu');
    });

    //SanPham
    Route::prefix('san-pham')->group(function(){
        Route::get('danh-sach', [SanPhamAdminController::class,'showDanhSach'])->name('san-pham.danh-sach');

        //add
        Route::get('them-san-pham', [SanPhamAdminController::class,'viewAdd'])->name('san-pham.them-san-pham');
        Route::post('add', [SanPhamAdminController::class,'add'])->name('san-pham.add');

        //update
        Route::get('sua-san-pham/{id}', [SanPhamAdminController::class,'viewUpdate'])->name('san-pham.sua-san-pham');
        Route::put('update/{id}', [SanPhamAdminController::class,'update'])->name('san-pham.update');

        //delete
        Route::get('delete/{id}', [SanPhamAdminController::class,'delete'])->name('san-pham.delete');
        Route::post('xoa-nhieu', [SanPhamAdminController::class,'xoaNhieuSanPham'])->name('san-pham.xoa-nhieu');
    });

    // Tin tuc
    Route::prefix('tin-tuc')->group(function(){
        Route::get('danh-sach', [TinTucAdminController::class,'showDanhSach'])->name('tin-tuc.danh-sach');

        //add
        Route::get('them-tin-tuc', [TinTucAdminController::class,'viewAdd'])->name('tin-tuc.them-tin-tuc');
        Route::post('add', [TinTucAdminController::class,'add'])->name('tin-tuc.add');

        //update
        Route::get('sua-tin-tuc/{id}', [TinTucAdminController::class,'viewUpdate'])->name('tin-tuc.sua-tin-tuc');
        Route::put('update/{id}', [TinTucAdminController::class,'update'])->name('tin-tuc.update');

        //delete
        Route::get('delete/{id}', [TinTucAdminController::class,'delete'])->name('tin-tuc.delete');
        Route::post('xoa-nhieu', [TinTucAdminController::class,'xoaNhieuTinTuc'])->name('tin-tuc.xoa-nhieu');
    });

    // Banner
    Route::prefix('banner')->group(function(){
        Route::get('danh-sach', [BannerAdminController::class,'showDanhSach'])->name('banner.danh-sach');

        //add
        Route::get('them-banner', [BannerAdminController::class,'viewAdd'])->name('banner.them-banner');
        Route::post('add', [BannerAdminController::class,'add'])->name('banner.add');

        //update
        Route::get('sua-banner/{id}', [BannerAdminController::class,'viewUpdate'])->name('banner.sua-banner');
        Route::put('update/{id}', [BannerAdminController::class,'update'])->name('banner.update');

        //delete
        Route::get('delete/{id}', [BannerAdminController::class,'delete'])->name('banner.delete');
        Route::post('xoa-nhieu', [BannerAdminController::class,'xoaNhieuBanner'])->name('banner.xoa-nhieu');
    });

    // Binh luan
    Route::prefix('binh-luan')->group(function(){
        Route::get('danh-sach', [BinhLuanController::class,'showDanhSach'])->name('binh-luan.danh-sach');

        //delete
        Route::get('delete/{id}', [BinhLuanController::class,'delete'])->name('binh-luan.delete');
        Route::post('xoa-nhieu', [BinhLuanController::class,'xoaNhieuBinhLuan'])->name('binh-luan.xoa-nhieu');
    });

    //Don hang
    Route::prefix('don-hang')->group(function(){
        Route::get('danh-sach-da-giao', [DonHangAdminController::class,'showDSDaGiao'])->name('don-hang.danh-sach-da-giao');
        Route::get('danh-sach-da-huy', [DonHangAdminController::class,'showDSDaHuy'])->name('don-hang.danh-sach-da-huy');
        Route::get('danh-sach-don-hang', [DonHangAdminController::class,'showDSDonHang'])->name('don-hang.danh-sach-don-hang');
        Route::get('danh-sach-kiem-duyet', [DonHangAdminController::class,'showDSKiemDuyet'])->name('don-hang.danh-sach-kiem-duyet');
        Route::get('chi-tiet-don-hang/{id}', [DonHangAdminController::class,'showChiTietDonHang'])->name('don-hang.chi-tiet-don-hang');
        Route::post('duyet-nhieu-don-hang', [DonHangAdminController::class,'duyetNhieuDonHang'])->name('don-hang.duyet-nhieu-don-hang');
        Route::get('duyet-don-hang/{id}', [DonHangAdminController::class,'duyetDonHang'])->name('don-hang.duyet-don-hang');
        Route::get('huy-don-hang/{id}', [DonHangAdminController::class,'huyDonHang'])->name('don-hang.huy-don-hang');
        Route::get('cap-nhat-don-hang/{id}', [DonHangAdminController::class,'showCapNhatDonHang'])->name('don-hang.cap-nhat-don-hang');
        Route::put('cap-nhat-don-hang/{id}', [DonHangAdminController::class,'capNhatDonHang'])->name('don-hang.cap-nhat-don-hang');
        Route::get('in-hoa-don/{id}', [DonHangAdminController::class,'inHoaDon'])->name('don-hang.in-hoa-don');
    });

});
