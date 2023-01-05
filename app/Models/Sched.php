<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sched extends Model
{
    use HasFactory;

    public function trip(){     //one trip per sched
        return $this->belongsTo(Trip::class);
    }
}
