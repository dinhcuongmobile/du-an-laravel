<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ChiTietDonHang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ChiTietDonHang>
 */
class ChiTietDonHangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'don_hang_id' => 1, 
            'san_pham_id' => 1, 
            'so_luong' => $this->faker->numberBetween(1, 10), 
            'don_gia' => $this->faker->randomFloat(2, 100, 1000), 
            'thanh_tien' => function (array $tt) {
                return $tt['so_luong'] * $tt['don_gia']; 
            },
        ];
    }
}
