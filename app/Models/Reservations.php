<?php

namespace App\Models;

use App\Models\Rooms;
use App\Models\Options_reservations;
use App\Models\Contacts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservations extends Model
{
    use HasFactory;

    public function contact() {
        return $this -> belongsTo(Contacts::class);
    }

    public function room() {
        return $this -> belongsTo(Rooms::class);
    }

    public function options_reservations() {
        return $this -> hasMany(Options_reservations::class);
    }
}
