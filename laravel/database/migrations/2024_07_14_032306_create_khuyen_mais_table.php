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
        Schema::create('khuyen_mais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('san_pham_id');
            $table->string('ma_giam_gia');
            $table->unsignedInteger('phan_tram_giam')->default(0);
            $table->date('ngay_bat_dau')->nullable(); // Ngày bắt đầu khuyến mại
            $table->date('ngay_ket_thuc')->nullable(); // Ngày kết thúc khuyến mại
            $table->string('mo_ta')->nullable(); // Mô tả khuyến mại
            $table->timestamps();

            $table->foreign('san_pham_id')->references('id')->on('san_phams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khuyen_mais');
    }
};
