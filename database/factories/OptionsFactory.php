<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Options>
 */
class OptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "ref_option" => $this -> faker -> unique() -> word(),
            "name" => $this -> faker -> word(),
            // "brand_id" => $this -> faker -> numberBetween(1,10),
            "cost" => $this -> faker -> randomFloat(2,10,40),
            "updated_at" => $this -> faker -> dateTime('now'),
            "created_at" => $this -> faker -> dateTime('now')
        ];
    }
}
