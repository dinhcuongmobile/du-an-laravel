<?php

namespace Database\Factories;

use App\Models\TaiKhoan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaiKhoan>
 */
class TaiKhoanFactory extends Factory
{
    protected $tai_khoans= TaiKhoan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ho_va_ten' => $this->faker->name, 
            'ten_dang_nhap' => $this->faker->unique()->userName,
            'mat_khau' => bcrypt('password'), // hashed password
            'email' => $this->faker->unique()->safeEmail,
            'so_dien_thoai' => $this->faker->optional()->regexify('[0-9]{10}'),
            'dia_chi' => $this->faker->optional()->address,
            'role' => $this->faker->randomElement([0, 1]), // 0: quản trị viên, 1: thành viên
            'trang_thai' => $this->faker->randomElement([0, 1]), // 0: tốt, 1: đã khóa
        ];
    }
}
