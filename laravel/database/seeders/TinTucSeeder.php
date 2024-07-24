<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TinTuc;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TinTuc::factory()->count(10)->create();
    }
}
