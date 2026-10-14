<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    public function run(): void
    {
        Kendaraan::factory()->create([
            'plat_nomor' => 'M 1234 AB'
            'merek' => 'Toyota Avanza',
            'jenis' => 'mobil',
            'tarif_per_hari' => 350000,
        ]);

       Kendaraan::factory()->create([
            'plat_nomor' => 'M 5678 CD'
            'merek' => 'Honda Brio',
            'jenis' => 'mobil',
            'tarif_per_hari' => 300000,
        ]); 

        Kendaraan::factory()->create([
            'plat_nomor' => 'M 2468 EF'
            'merek' => 'Honda Beat',
            'jenis' => 'motor',
            'tarif_per_hari' => 80000,
        ]);

        Kendaraan::factory()->create([
            'plat_nomor' => 'M 1357 GH'
            'merek' => 'Yamaha NMAX',
            'jenis' => 'motor',
            'tarif_per_hari' => 120000,
        ]);
        
    }
}