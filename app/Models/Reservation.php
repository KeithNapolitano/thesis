<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function trip(){ //many reservations per trip
        return $this->belongsTo(Trip::class);
    }

    public function payment(){ //one reservation per payment
        return $this->hasOne(Payment::class);
    }
}
