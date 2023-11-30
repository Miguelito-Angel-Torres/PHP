<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
        CREATE PROCEDURE sp_GetAlumnos
        (IN id_alumno INT)
        sp:BEGIN
            DECLARE a int;
            START TRANSACTION;
                SET a = (SELECT count(*) FROM alumnos where id = id_alumno );
                IF (a>0)
                THEN
                    SELECT a.id,a.name,a.apellido,a.edad,a.dni,a.correo,a.telefono,b.bloque,ac.actitud,a.bloque_id,a.actitud_id,a.semestre,a.mes
                    FROM alumnos a join actitudes ac 
                    ON (a.actitud_id = ac.id) join bloques b
                    ON(a.bloque_id = b.id)
                    WHERE a.id = id_alumno;
                ELSEIF(a=0)THEN 
                    SELECT a.id,a.name,a.apellido,a.edad,a.dni,a.correo,a.telefono,b.bloque,ac.actitud,a.semestre,a.mes
                    FROM alumnos a join actitudes ac 
                    ON (a.actitud_id = ac.id) join bloques b
                    ON(a.bloque_id = b.id) ORDER BY a.id ASC;
                END IF;
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
        $procedure1 = `DROP PROCEDURE IF EXISTS sp_GetAlumnos`;
        DB::unprepared($procedure1);
    }
};
