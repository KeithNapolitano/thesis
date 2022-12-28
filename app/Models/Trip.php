<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'route_id', 'dates', 'driver', 'van', 'seats_left', 'num_pass',
    //     'trip_status', 'orig_fare', 'extra_fare'
    // ];
    //protected $table = 'trips';

    //CHANGING THE PRIMAYKEY INSTREAD OF ID
    //protected $primaryKey = 'destination'

    //protected $timestamps = false;

    public function users(){ //changed to many users
        return $this->hasMany(User::class);
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
}
