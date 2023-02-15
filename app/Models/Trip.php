<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_id', 'seat_id', 'dates', 'trip_status', 'van_plate', 'driver_name', 
        'orig_fare', 'extra_fare', 'driver_status', 'passenger_status', 'payment_status',
        'supervisor_status'
    ];
    //protected $table = 'trips';

    //CHANGING THE PRIMAYKEY INSTREAD OF ID
    //protected $primaryKey = 'destination'

    //protected $timestamps = false;

    public function user(){ //forCOMMUTER
        return $this->belongsTo(User::class);
    }

    public function route(){    //one route per trip
        return $this->belongsTo(Route::class);
    }

    public function payments(){      //a trip can have many payments
        return $this->hasMany(Payment::class);
    }
    public function seat(){     //one seat per trip but can access all the 15 seat status
        return $this->hasOne(Seat::class);
    }
}
