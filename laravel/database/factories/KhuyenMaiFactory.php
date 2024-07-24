<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KhuyenMai;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KhuyenMai>
 */
class KhuyenMaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'san_pham_id' => 1, 
            'giam_gia'=> $this->faker->numberBetween(0, 99)
        ];
    }
}
