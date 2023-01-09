<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'seat1',
        'seat2',
        'seat3',
    ];

    public function trip(){     //one seat per trip
        return $this->hasOne(Trip::class);
    }
}
