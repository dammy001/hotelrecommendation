<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillabe = [
        'hotelname', 'roomname', 'guest', 'facilities', 'price', 'image'
    ];
}
