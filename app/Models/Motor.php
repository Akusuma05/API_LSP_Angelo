<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Kendaraan
{
    use HasFactory;
    protected $primaryKey = 'Truk_ID';
    protected $keyType = 'integer';
    protected $table = 'Motor';
    protected $fillable = [
        'Ukuran_Bagasi',
        'Kapasitas_Bensin'
    ];

    //Function Hubungan Kenderaan Dengan Motor
    public function kendaraan()
    {
        return $this->hasOne(Kendaraan::class, 'Motor_ID', 'id');
    }
}
