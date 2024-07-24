<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GioHang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GioHang>
 */
class GioHangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tai_khoan_id' => 1, 
            'san_pham_id' => 1,   
            'so_luong' => $this->faker->numberBetween(1, 10),
            'thanh_tien' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
