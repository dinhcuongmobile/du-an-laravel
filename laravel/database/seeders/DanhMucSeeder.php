<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DanhMuc;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DanhMuc::factory()->count(10)->create();
    }
}
