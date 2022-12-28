<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    use HasFactory;

    public function driver(){ //one driver per van
        return $this->hasOne(Driver::class);
    }

    public function trip(){ //lot of trips in one van
        return $this->hasMany(Trip::class);
    }
}
