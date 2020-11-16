<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'seller_id',
        'carpet_area',
        'price',
        'phone',
        'sale_rent',
        'category',
        'deposit',
        'city',
        'area',
        'address',
        'image',
    ];
}
