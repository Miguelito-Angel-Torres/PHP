<?php

namespace Database\Seeders;
use App\Models\Semestre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semestre = new Semestre();
        $semestre->semestre = '2023-1';
        $semestre->fechInicio = '2023-01-01';
        $semestre->fechFinal = '2023-06-30';
        $semestre->estado =  true;
        $semestre->save();

        $semestre1 = new Semestre();
        $semestre1->semestre = '2023-2';
        $semestre1->fechInicio = '2023-07-01';
        $semestre1->fechFinal = '2023-12-31';
        $semestre->estado = false;
        $semestre1->save();
    }
}
