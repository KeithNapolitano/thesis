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

    public function scheds(){     //one route can have many scheds
        return $this->hasMany(Sched::class);
    }

    public function van(){     //one van per route
        return $this->hasOne(Van::class);
    }
}

