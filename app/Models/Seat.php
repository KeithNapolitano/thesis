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
        'seat4',
        'seat5',
        'seat6',
        'seat7',
        'seat8',
        'seat9',
        'seat10',
        'seat11',
        'seat12',
        'seat13',
        'seat14',
        'seat14',
    ];

    public function trip(){     //one seat per trip
        return $this->hasOne(Trip::class);
    }
}
