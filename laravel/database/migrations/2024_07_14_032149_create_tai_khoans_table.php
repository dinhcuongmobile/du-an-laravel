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
        Schema::create('tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten',50)->nullable();
            $table->string('ten_dang_nhap',50);
            $table->string('mat_khau',255);
            $table->string('email');
            $table->string('so_dien_thoai',10)->nullable();
            $table->string('dia_chi')->nullable();
            $table->unsignedInteger('role')->default(1); // 0: quan tri vien 1: thanh vien
            $table->unsignedInteger('trang_thai')->default(0); // 0: tot 1: da khoa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoans');
    }
};
