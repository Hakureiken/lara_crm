<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionsReservations extends Model
{
    use HasFactory;

    public function reservation() {
        return $this -> belongsTo(Reservation::class);
    }

    public function option() {
        return $this -> belongsTo(Options::class);
    }
}
