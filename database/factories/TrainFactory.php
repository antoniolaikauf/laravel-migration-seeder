<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()->word(),
            'stazione_di_partenza' => fake()->word(),
            'stazione_di_arrivo' => fake()->word(),
            'orario_di_partenza' => fake()->dateTimeBetween('-1 day', '+1 day'),
            'orario_di_arrivo' => fake()->dateTimeBetween('0 day', '+1 day'),
            'codice_treno' => fake()->regexify('[A-Z]{3}[0-9]{3}'),
            'numero_carrozze' => fake()->numberBetween(1, 20),
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean(),
        ];
    }
}
