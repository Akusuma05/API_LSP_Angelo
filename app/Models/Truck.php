<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Kendaraan
{
    use HasFactory;
    protected $primaryKey = 'Truk_ID';
    protected $keyType = 'integer';
    protected $table = 'truk';
    protected $fillable = [
        'Luas_Area_Kargo',
        'Jumlah_Roda_Ban'
    ];

    //Function Hubungan Kenderaan Dengan Truck
    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class, 'Truk_ID', 'id');
    }
}
