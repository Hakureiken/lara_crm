<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this -> faker -> word(),
            "adress" => $this -> faker -> word(),
            "postal_code" => $this -> faker -> word(),
            "city" => $this -> faker -> word(),
            "siret" => $this -> faker -> word()
        ];
    }
}
