<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    protected $primaryKey = 'request_id';

    protected $fillable = [
        'property_id',
        'customer_id',
        'description',
        'status'
    ];
}
