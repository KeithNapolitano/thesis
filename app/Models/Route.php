<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'descr', 'fare'
    ];

    public function scheds(){     //one route can have many trips
        return $this->hasMany(Trip::class);
    }
}

