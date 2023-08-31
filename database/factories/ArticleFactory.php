<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//

use App\Models\Article ;
use App\Models\Employe;
use App\Models\Canal ;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;

    public function definition(): array
    {
        $employe = Employe::factory()->create(); 
        $canal = Canal::factory()->create(); 
        return [
            //
            'titre' => fake()->lastName(),
            'contenu' => fake()->Name(),
            'type' => fake()->randomElement(['Note','Memo','Rapport','Autre']),
            'employe_id' => $employe->id,
            'canal_id' => $canal->id,            
        ];
    }
}
////