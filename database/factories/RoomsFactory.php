<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rooms>
 */
class RoomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"          => $this -> faker -> words(2,true),
            "ref_room"      => $this -> faker -> word(),
            "max_persons"   => $this -> faker -> numberBetween(1,10),
            "is_active"     => $this -> faker -> boolean()
        ];
    }
}
