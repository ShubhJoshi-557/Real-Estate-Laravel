<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id',
        'parking',
        'security_services',
        'water_supply',
        'power_backup',
        'daily_maintenance',
        'wifi',
        'jogging_track',
        'lawn',
        'clubhouse',
        'pool',
        'gym',
        'party_hall',
        'temple',
        'school',
        'hospital',
        'station',
        'airport',
        'cinema_hall',
        'restaurants'
    ];
}
