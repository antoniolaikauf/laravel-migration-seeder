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
            'azienda'=> fake() -> word(),
            'stazione_di_partenza'=> fake() ->word() ,
            'stazione_di_arrivo'=> fake() ->word() ,
            'orario_di_partenza'=> fake() ->time() ,
            'orario_di_arrivo'=> fake() ->time() ,
            'codice_treno'=> fake() -> regexify('[A-Z]{3}[0-4]{3}'),
            'numero_carrozze'=> fake() -> numberBetween(0, 20) ,
            'in_orario'=> fake() -> boolean() ,
            'cancellato'=> fake() -> boolean() ,
        ];
    }
}
