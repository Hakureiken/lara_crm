<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Options_reservations>
 */
class OptionsReservationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "reservation_id" => $this -> faker -> numberBetween(1,10),
            "option_id" => $this -> faker -> numberBetween(1,4),
            "updated_at" => $this -> faker -> dateTime('now'),
            "created_at" => $this -> faker -> dateTime('now')
        ];
    }
}
