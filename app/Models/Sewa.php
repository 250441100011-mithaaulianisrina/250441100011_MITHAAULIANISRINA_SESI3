<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjamans';

    protected $fillable = [
        'kendaraaan_id',
        'nama_penyewa',
        'tanggal_mulai',
        'lama_sewa',
        'total_biaya',
        'status',
    ];

    public function Kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
