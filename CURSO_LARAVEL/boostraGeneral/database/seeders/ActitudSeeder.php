<?php

namespace Database\Seeders;

use App\Models\Actitude;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $actitud = new Actitude();
        $actitud->actitud = 'Falta';
        $actitud->save();

        $actitud1 = new Actitude();
        $actitud1->actitud = 'Puntual';
        $actitud1->save();

        $actitud2 = new Actitude();
        $actitud2->actitud = 'Tardanza';
        $actitud2->save();

        $actitud3 = new Actitude();
        $actitud3->actitud = 'Justificacion';
        $actitud3->save();


    }
}
