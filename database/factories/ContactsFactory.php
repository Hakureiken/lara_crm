<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacts>
 */
class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name"    => $this -> faker -> word(),
            "last_name"     => $this -> faker -> word(),
            "job"           => $this -> faker -> word(),
            "email"         => $this -> faker -> unique() -> word(),
            "phone"         => $this -> faker -> word(),
            "company_id"    => $this -> faker -> numberBetween(1,10)
        ];
    }
}
