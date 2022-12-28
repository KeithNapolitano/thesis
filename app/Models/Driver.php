<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function van(){ //one van per driver
        return $this->hasOne(Van::class);
    }

    public function route(){ //one route per driver
        return $this->hasOne(Route::class);
    }
}
