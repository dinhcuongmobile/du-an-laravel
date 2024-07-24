<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DonHang;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DonHang>
 */
class DonHangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tai_khoan_id' => 1, // Tạo mới một tài khoản hoặc chọn tài khoản có sẵn
            'ho_ten_nhan' => $this->faker->name,
            'ngay_dat_hang' => $this->faker->dateTime,
            'dia_chi_nhan' => $this->faker->address,
            'so_dt_nhan' => $this->faker->numerify('##########'), // Tạo số điện thoại 10 chữ số
            'phuong_thuc_tt' => $this->faker->randomElement([0, 1]), // 0: Ship COD, 1: Thanh toán online
            'trang_thai' => $this->faker->randomElement([0, 1, 2]), // 0: Đơn hàng mới, 1: Đang giao, 2: Đã giao
            'thanh_toan' => $this->faker->randomElement([0, 1]), // 0: Chưa thanh toán, 1: Đã thanh toán
        ];
    }
}
