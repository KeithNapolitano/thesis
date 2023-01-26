<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function reservation(){ //one payment per reservation
        return $this->hasOne(Reservation::class);
    }

    public function trip(){ //daghan na payment sa isa ka trip
        return $this->belongsTo(Trip::class);
    }
}
