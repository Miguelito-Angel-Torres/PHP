<?php

namespace Database\Seeders;
//use App\Models\Actitude;
use App\Models\Alumno;
use App\Models\Bloque;
use App\Models\User;
use App\Models\Aula;
use App\Models\Curriculare;

use App\Models\Docente;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(ActitudSeeder::class);
        $this->call(BloqueSeeder::class);
        // Haciendo por aca , ya no es necesario los Seeders:
        User::factory(10)->create();
        //Actitude::factory(20)->create();
        //Bloque::factory(20)->create();
        Alumno::factory(15)->create();
        Docente::factory(10)->create();
        Aula::factory(10)->create();

        $this->call(SemestreSeeder::class);
        
        Curriculare::factory(10)->create();
        $this->call(HorarioSeeder::class);
       
    }
}
