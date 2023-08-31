<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Agence ;
//
use \App\Models\Departement ;
use \App\Models\Employe ;
use Orchid\Platform\Models\User ;

use \App\Models\Article;

use \App\Models\Canal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  \App\Models\User::factory(10)->create();

        //  \App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //  ]);

        //  \App\Models\User::factory()->create([
        //      'name' => 'toto',
        //      'email' => 'toto@example.com',
        //      'password' => 'toto1234',
        //  ]);

        //  User::factory()->create([
        //     'name' => 'Boris',
        //     'email' => 'borisgnanzim@gmail.com',
        //     'password' => 'gride1234*',
        // ]);
         //
         Agence::factory()->count(10)->create();

         Departement::factory()->count(10)->create();
         Employe::factory()->count(10)->create();
         Canal::factory()->count(10)->create();
         Article::factory()->count(10)->create();
         
        // User::factory()->count(5)->create();
    }
}
