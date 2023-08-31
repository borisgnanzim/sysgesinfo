<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Canal>
 */

 use App\Models\Departement;

 use App\Models\Agence;

class CanalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $agence = Agence::factory()->create(); 
        $departement = Departement::factory()->create(); 
        return [
            //

            'nom' => fake()->name(),
            'agence_id' => $agence->id,
            'departement_id' => $departement->id,     
        ];
    }
}
