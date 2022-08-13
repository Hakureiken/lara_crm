<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservations>
 */
class ReservationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "contact_id" => $this -> faker -> numberBetween(1,10),
            "begin_date" => $this -> faker -> dateTimeBetween('-3 years','-1 years'),
            "end_date" => $this -> faker -> dateTimeBetween('-1 years','now'),
            "room_id" => $this -> faker -> unique() -> numberBetween(1,18)
        ];
    }
}
