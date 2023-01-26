<?php

namespace App\Models;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'sched_id', 'seat_id', 'dates', 'van_id', 'trip_status',
        'orig_fare', 'extra_fare'
    ];
    //protected $table = 'trips';

    //CHANGING THE PRIMAYKEY INSTREAD OF ID
    //protected $primaryKey = 'destination'

    //protected $timestamps = false;

    public function user(){ //for DRIVER AND COMMUTER
        return $this->belongsTo(User::class);
    }

    public function scheds(){ //one sched per trip
        return $this->hasOne(Sched::class);
    }

    public function route(){    //one route per trip
        return $this->belongsTo(Route::class);
    }

    public function van(){      //one van per trip
        return $this->belongsTo(Van::class);
    }

    public function payments(){      //a trip can have many payments
        return $this->hasMany(Payment::class);
    }
    public function seat(){     //one seat per trip
        return $this->hasOne(Seat::class);
    }
}
