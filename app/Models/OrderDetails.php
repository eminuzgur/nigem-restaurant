<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $table='order_details';
    protected $fillable=[
        'order_id',
        'product_id',
        'quantity',
        'total'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function products(){
        return $this->morphToMany(Product::class,'product_id');
    }
}
