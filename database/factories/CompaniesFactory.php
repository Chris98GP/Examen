<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           //Datos fake para la creacion de companies
            'name' => fake()->name(),
        ];
    }
}
