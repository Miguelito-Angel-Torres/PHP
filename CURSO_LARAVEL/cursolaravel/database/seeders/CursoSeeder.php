<?php

namespace Database\Seeders;
use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(50)->create();
        
        
        
        //Va la Instancia y las propiedades con valores necesarios para que me agregue un registro en la tabla:
        /*$curso = new Curso();
        $curso->name = "Laravel";
        $curso->descripcion = "El mejor Php";
        $curso->categoria = "Desarrollo web";
        $curso->save();*/
    }
}
