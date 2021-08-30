<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'player_Name' , 'player_Contact', 'player_Email', 'booked_Date', 'booked_Time', 'booked_Ground' 
    ];
}
