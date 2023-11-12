<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'Order';
    protected $fillable = [
        'Customer_ID',
        'Kendaraan_ID'
    ];
    
    //Function Hubungan Kenderaan Dengan Order
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'Kendaraan_ID', 'id');
    }

    //Function Hubungan Customer Dengan Order
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Customer_ID', 'Customer_ID');
    }
}
