<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tintuc;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TinTuc>
 */
class TinTucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hinh_anh' => $this->faker->imageUrl(),
            'tieu_de' => $this->faker->words(3, true),
            'noi_dung' => $this->faker->sentence
        ];
    }
}
