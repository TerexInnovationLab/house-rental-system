<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $primaryKey = 'application_id';

    protected $fillable = [
        'property_id',
        'customer_id',
        'status'
    ];
}
