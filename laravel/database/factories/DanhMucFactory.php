<?php

namespace Database\Factories;

use App\Models\DanhMuc;
use Illuminate\Database\Eloquent\Factories\Factory;

class DanhMucFactory extends Factory
{
    protected $danh_mucs = DanhMuc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ten_danh_muc' => $this->faker->word, // hoặc $this->faker->name nếu bạn muốn tên giống tên người
        ];
    }
}
