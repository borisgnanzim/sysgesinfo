<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//
use App\Models\Departement ;
use App\Models\Employe;

use App\Models\User ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Employe::class;
    
    public function definition(): array
    {
        $departement = Departement::factory()->create(); 

        $user = User::factory()->create(); 
        return [
            //
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'email' => fake()->unique()->safeEmail(),
            'departement_id' => $departement->id,
            'admin'=>random_int(0,1),
            'user_id' => $user->id,
        ];
    }
}
