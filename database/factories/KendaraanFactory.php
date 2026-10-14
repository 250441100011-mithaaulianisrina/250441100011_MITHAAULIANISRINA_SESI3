<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
        {
            return [
                'plat_nomor' => fake()->unique(),
                'merek' => fake()->sentence(),
                'jenis' => ENUM('mobil','motor'),
                'tarif_per_hari' => fake()->INT(),
            ];
        }
}

