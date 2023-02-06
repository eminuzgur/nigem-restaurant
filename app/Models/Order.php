<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
        'total_price',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function orderDetails(){
        return $this->hasMany(OrderDetails::class,'order_id','id');
    }
}
