<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    
    protected $table = 'bills';
    protected $primarykey ='bill_id';
    protected $fillable = ['product_id',
                           'amount',
                           'payment_method',
                           'date_time_payment',
                           'sale_id',
                           'shopping_id'];


public function products()
{
    return $this->belongsTo('App\Models\Product','product_id');
}
public function sales()
{
    return $this->belongsTo('App\Models\Sale','sale_id');
}
public function shopping()
{
    return $this->belongsTo('App\Models\Shopping','shopping_id');
}




}
