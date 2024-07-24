<?php

namespace Database\Factories;

use App\Models\SanPham;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SanPham>
 */
class SanPhamFactory extends Factory
{
    protected $san_phams = SanPham::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'danh_muc_id' => 1,
            'ten_san_pham' => $this->faker->words(3, true), // Tạo một chuỗi từ ngẫu nhiên
            'gia_san_pham' => $this->faker->randomFloat(2, 100, 10000),
            'gia_khuyen_mai' => $this->faker->randomFloat(2, 50, 9000),
            'hinh_anh' => $this->faker->imageUrl(),
            'so_luong' => $this->faker->numberBetween(1, 100),
            'trang_thai' => $this->faker->numberBetween(0, 1),
            'khuyen_mai' => $this->faker->numberBetween(0, 50),
            'mo_ta' => $this->faker->sentence,
            'luot_xem' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
