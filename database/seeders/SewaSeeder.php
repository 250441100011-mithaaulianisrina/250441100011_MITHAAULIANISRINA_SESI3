<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class SewaSeeder extends Seeder
{
    public function run(): void
    {
        Sewa::factory(10)->create();
    }
}