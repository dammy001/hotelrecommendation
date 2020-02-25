<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'hotelname', 'location', 'address', 'contact', 'roomtype', 'price', 'rating', 'description', 'facilities', 'category', 'image'
    ];
}
