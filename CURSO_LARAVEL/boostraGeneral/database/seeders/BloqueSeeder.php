<?php

namespace Database\Seeders;

use App\Models\Bloque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bloque = new Bloque();
        $bloque->bloque = 'A-123';
        $bloque->save();


        $bloque1 = new Bloque();
        $bloque1->bloque = 'B-123';
        $bloque1->save();

        $bloque2 = new Bloque();
        $bloque2->bloque = 'C-123';
        $bloque2->save();

        $bloque3 = new Bloque();
        $bloque3->bloque = 'D-123';
        $bloque3->save();

    }
}
