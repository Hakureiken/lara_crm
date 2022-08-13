<?php

namespace App\Models;

use App\Models\Reservations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rooms extends Model
{
    use HasFactory;

    public function reservations() {
        return $this -> hasMany(Reservations::class);
    }
}
