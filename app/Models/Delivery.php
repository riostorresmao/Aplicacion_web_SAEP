<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    
    protected $table = 'deliveries';
    protected $primarykey ='delivery_id';
    protected $fillable = ['estate',
                           'date_time_delivery',
                           'observation'
                          ];
}
