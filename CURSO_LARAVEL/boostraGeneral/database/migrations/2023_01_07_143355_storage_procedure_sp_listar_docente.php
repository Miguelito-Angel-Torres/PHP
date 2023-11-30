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
        DROP PROCEDURE IF EXISTS sp_GetDocente;
        CREATE PROCEDURE sp_GetDocente
        (
        IN docente_codigo VARCHAR(250)
        )
        sp:BEGIN
            DECLARE a int;
            START TRANSACTION;
            SET a = (SELECT count(*) FROM docentes as d where d.codDocente  = docente_codigo and  d.estado = 0 );
            if(a>0)
            then
                UPDATE docentes  set estado =  1 where codDocente = docente_codigo ;
                SELECT * FROM docentes d where d.codDocente = docente_codigo ; 
            ELSEIF(a=0)THEN
                SELECT * FROM docentes d where d.codDocente = docente_codigo ;
            end if;
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
        $procedure1 = `DROP PROCEDURE IF EXISTS sp_GetDocente`;
        DB::unprepared($procedure1);
    }
};
