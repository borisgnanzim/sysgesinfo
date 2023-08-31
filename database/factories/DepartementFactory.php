<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//
use App\Models\Departement ;
use App\Models\Agence;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departement>
 */
class DepartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Departement::class;

    public function definition(): array
    {
        $agence = Agence::factory()->create(); 
        return [
            //
            'nom' => fake()->company,
            'agence_id' => $agence->id,

        ];
    }
}
