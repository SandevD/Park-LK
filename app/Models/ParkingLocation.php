<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkingLocation extends Model
{
    protected $fillable = [
        'name',
        'city_id',
    ];

    // Relationships

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
