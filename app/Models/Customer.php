<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'Customer_ID';
    protected $keyType = 'integer';
    protected $table = 'Customer';
    protected $fillable = [
        'Nama',
        'Alamat',
        'No_Telepon',
        'ID_Card'
    ];

    //Function Hubungan Customer Dengan Order
    public function order(){
        return $this->hasMany(Order::class, 'Customer_ID', 'Customer_ID');
    }
}
