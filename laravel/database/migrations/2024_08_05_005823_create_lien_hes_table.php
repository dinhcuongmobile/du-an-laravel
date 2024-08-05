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
        Schema::create('lien_hes', function (Blueprint $table) {
            $table->id();
            $table->string('ho_va_ten',255);
            $table->string('email',255);
            $table->string('so_dien_thoai',10);
            $table->text('noi_dung');
            $table->unsignedInteger('trang_thai')->default(0);  // 0: Chưa xử lý, 1: Đã xử lý
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lien_hes');
    }
};
