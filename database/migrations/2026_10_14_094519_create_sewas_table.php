<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kendaraan_id');
                    ->constrained('kendaraans')
                    ->onDelete('cascade');
            $table->VARCHAR(100)('nama_penyewa');
            $table->date('tanggal_mulai');
            $table->INT('lama_sewa');
            $table->INT('total_biaya');
            $table->ENUM('berjalan','selesai')('status');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
