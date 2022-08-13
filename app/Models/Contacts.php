<?php

namespace App\Models;

use App\Models\Companies;
use App\Models\Reservations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacts extends Model
{
    use HasFactory;

    public function reservations() {
        return $this -> hasMany(Reservations::class);
    }

    public function company() {
        return $this -> belongsTo(Companies::class);
    }
}
