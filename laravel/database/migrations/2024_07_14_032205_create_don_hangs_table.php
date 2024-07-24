<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('don_hangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tai_khoan_id');
            $table->string('ho_ten_nhan');
            $table->dateTime('ngay_dat_hang');
            $table->string('dia_chi_nhan');
            $table->string('so_dt_nhan',10);
            $table->unsignedInteger('phuong_thuc_tt')->default(0);  //0: Ship COD, 1: Thanh toán online
            $table->unsignedInteger('trang_thai')->default(0);  // 0: Đơn hàng mới, 1: Đang Giao , 2: Đã giao
            $table->unsignedInteger('thanh_toan')->default(0);  // 0: Chưa thanh toán , 1: Đã thanh toán
            $table->timestamps();

            //
            $table -> foreign('tai_khoan_id')->references('id')->on('tai_khoans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hangs');
    }
};
