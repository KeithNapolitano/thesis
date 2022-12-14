<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination', 'dates', 'driver', 'van', 'seats_left', 'num_pass',
        'trip_status', 'orig_fare', 'extra_fare'
    ];
    //protected $table = 'trips';

    //CHANGING THE PRIMAYKEY INSTREAD OF ID
    //protected $primaryKey = 'destination'

    //protected $timestamps = false;
}
