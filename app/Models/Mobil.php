<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Kendaraan
{
    use HasFactory;
    protected $primaryKey = 'Mobil_ID';
    protected $keyType = 'integer';
    protected $table = 'Mobil';
    protected $fillable = [
        'Tipe_Bahan_Bakar',
        'Luas_Bagasi'
    ];

    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class, 'Mobil_ID', 'id');
    }
}
