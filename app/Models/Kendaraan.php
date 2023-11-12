<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'Kendaraan';
    protected $fillable = [
        'Model',
        'Tahun',
        'Jumlah_Penumpang',
        'Manufaktur',
        'Harga',
        'Jenis_Kendaraan',
    ];

    //Function Hubungan Kenderaan Dengan Mobil
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id', 'Mobil_ID');
    }

    //Function Hubungan Kenderaan Dengan Motor
    public function motor()
    {
        return $this->belongsTo(Motor::class, 'id', 'Motor_ID');
    }

    //Function Hubungan Kenderaan Dengan Truck
    public function truck()
    {
        return $this->belongsTo(Truck::class, 'id', 'Truk_ID');
    }

    //Function Hubungan Kenderaan Dengan Order
    public function order(){
        return $this->hasMany(Order::class, 'Kendaraan_ID', 'id');
    }

}
