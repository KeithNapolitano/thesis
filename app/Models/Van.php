<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Van extends Model
{
    use HasFactory;

    public function user(){ //one DRIVER per van
        return $this->hasOne(User::class);
    }

    public function route(){ //one ROUTE per van
        return $this->hasOne(Route::class);
    }

    public function trip(){ //lot of trips in one van
        return $this->hasMany(Trip::class);
    }
}
