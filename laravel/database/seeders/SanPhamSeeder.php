<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SanPham;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SanPham::factory()->count(10)->create();
    }
}
