<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $table = 'route';
    protected $primarykey ='assigned_route_id';
    protected $fillable = ['employee_id',
                           'assigned_zone',
                           'quantity_deliveries',
                           'service_time',
                           'vehicle_license_plate',
                           'vehicle',
                           'bill_id',
                           'delivery_id',
                          ];

}