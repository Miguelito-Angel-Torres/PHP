<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "
        DROP PROCEDURE IF EXISTS sp_ConsultaSemestre;
        CREATE PROCEDURE sp_ConsultaSemestre
        (
        IN semestre int,
        IN docente_codigo VARCHAR(100)
        )
        sp:BEGIN
            START TRANSACTION;
            select s.id,s.semestre,s.fechInicio,s.fechFinal,s.estado,h.dia,c.codCurso,h.hora,h.fecha,h.horaEntrada,h.horaSalida,h.secCurso
            from horarios as h join semestres as s
            on(h.semestre_id = s.id) join aulas as a
            on(h.aula_id = a.id) join curriculares as c
            on(h.curricular_id = c.id) join docentes as d
            on(h.docente_id = d.id) where s.id LIKE semestre and d.codDocente = docente_codigo and d.estado = 1;
        COMMIT; 
        END
        
        ";
        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $procedure1 = `DROP PROCEDURE IF EXISTS sp_ConsultaSemestre`;
        DB::unprepared($procedure1);
    }
};
