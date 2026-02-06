<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $primaryKey = 'property_id';

    protected $fillable = [
        'landlord_id',
        'title',
        'description',
        'rent',
        'deposit',
        'location',
        'bedrooms',
        'availability_date',
        'status'
    ];

    public function landlord()
    {
        return $this->belongsTo(User::class, 'landlord_id');
    }

    public function amenities()
    {
        return $this->belongsToMany(
            Amenity::class,
            'property_amenities',
            'property_id',
            'amenity_id'
        );
    }

    public function photos()
    {
        return $this->hasMany(PropertyPhoto::class, 'property_id');
    }
}
