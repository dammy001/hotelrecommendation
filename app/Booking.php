<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'hotelname', 'roomname', 'price', 'datefrom', 'dateto', 'fullname', 'email', 'contact'
    ];
}
