<?php

namespace App\Models;

use App\Models\Options_reservations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Options extends Model
{
    use HasFactory;

    public function options_reservations() {
        return $this -> hasMany(Options_reservations::class);
    }
}
