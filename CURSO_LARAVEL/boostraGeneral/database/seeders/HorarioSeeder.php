<?php

namespace Database\Seeders;
use App\Models\Horario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Factories\CurriculareFactory;

class HorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // Agregacion de Estado Uno (True)
    // Mismo Profesor
    // Ver eso de Curricular y aula y dcoente
    public function run()
    {
        $horario = new Horario();
        $horario->codHorario = '27921';
        $horario->semestre_id = 1;
        $horario->dia = 'VI';
        $horario->hora = '10:09';
        $horario->curricular_id = 1;
        $horario->secCurso = "F";
        $horario->teopra = "T";
        $horario->aula_id= 1;
        $horario->tope = 20;
        $horario->docente_id = 1;
        $horario->estado = 1;
        $horario->fecha = '2013-01-04';
        $horario->horaEntrada = '09:42:00';
        $horario->horaSalida= '13:20:00';
        $horario->save();

        $horario1 = new Horario();
        $horario1->codHorario = '27922';
        $horario1->semestre_id= 1;
        $horario1->dia = 'MA';
        $horario1->hora = '08:09';
        $horario1->curricular_id = 2;
        $horario1->secCurso = "F";
        $horario1->teopra = "P";
        $horario1->aula_id = 2;
        $horario1->tope = 20;
        $horario1->docente_id = 1;
        $horario1->estado = 1;
        $horario1->fecha = '2013-01-04';
        $horario1->horaEntrada = '09:42:00';
        $horario1->horaSalida= null;
        $horario1->save();


        // colocar procedimiento estado horario = 1
        $horario = new Horario();
        $horario->codHorario = '27923';
        $horario->semestre_id = 2;
        $horario->dia = 'VI';
        $horario->hora = '10:09';
        $horario->curricular_id = 1;
        $horario->secCurso = "F";
        $horario->teopra = "T";
        $horario->aula_id= 2;
        $horario->tope = 20;
        $horario->docente_id = 1;
        $horario->estado = 1;
        $horario->fecha = '2013-01-04';
        $horario->horaEntrada = '09:42:00';
        $horario->horaSalida= '13:20:00';
        $horario->save();



    }
}
