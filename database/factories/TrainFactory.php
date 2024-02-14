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
        // nelle train factori mettere le fake che aggiungono i dati randomici , e questi dati si riferiscono alle colonne create nel migration create_trains_table
        return [
            'azienda' => fake()->word(),
            'stazione_di_partenza' => fake()->word(),
            'stazione_di_arrivo' => fake()->word(),
            'orario_di_partenza' => fake()->dateTimeBetween('now', '+1 day'),
            'orario_di_arrivo' => fake()->dateTimeBetween('+2 day', '+4 day'),
            'codice_treno' => fake()->regexify('[A-Z]{3}[0-9]{3}'),
            'numero_carrozze' => fake()->numberBetween(1, 20),
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean(),
        ];
    }
}
