<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kendaraans';

    protected $fillable = [
        'plat_nomor',
        'merek',
        'jenis',
        'tarif_per_hari',
    ];

    public function sewas()
    {
        return $this->hasMany(Sewa::class);
    }
}

