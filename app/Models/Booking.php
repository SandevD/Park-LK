<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'parking_location_id',
        'start_date',
        'end_date',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parkingLocation()
    {
        return $this->belongsTo(ParkingLocation::class);
    }
}
