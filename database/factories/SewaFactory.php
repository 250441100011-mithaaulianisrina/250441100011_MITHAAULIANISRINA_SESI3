<?php

namespace Database\Factories;

use App\Models\Sewa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sewa>
 */
class SewaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
        {
            return [
                'kendaraan_id' => Anggota::inRandomOrder()->value('id'),
                'nama_penyewa' => fake()->VARCHAR(100),
                'tanggal_mulai' => fake()->date(),
                'lama_sewa' => fake()->INT(),
                'status" => ENUM('berjalan','selesai'),
            ];
        }
}
