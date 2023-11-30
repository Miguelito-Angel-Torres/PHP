<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('horarios', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->char('codHorario',9)->nullable();
            $table->bigInteger('semestre_id')->unsigned();
            $table->char('dia',4)->nullable();
            $table->time('hora')->nullable();
            //$table->nullableTimestamps('hora');
            $table->bigInteger('curricular_id')->unsigned();
            $table->char('secCurso',5)->nullable();
            $table->char('teopra',5)->nullable();
            $table->bigInteger('aula_id')->unsigned();
            $table->unsignedTinyInteger('tope')->nullable()->default(0);
            $table->bigInteger('docente_id')->unsigned();

            $table->boolean('estado')->nullable()->default(false);

            $table->date('fecha')->nullable()->default(null);

            $table->time('horaEntrada')->nullable()->default(null);

            $table->time('horaSalida')->nullable()->default(null);


            $table->timestamps();


            $table->foreign('semestre_id')->references('id')
            ->on('semestres')->onUpdate('cascade');

            $table->foreign('curricular_id')->references('id')
            ->on('curriculares')->onUpdate('cascade');
            

            $table->foreign('aula_id')->references('id')
            ->on('aulas')->onUpdate('cascade');
            

            $table->foreign('docente_id')->references('id')
            ->on('docentes')->onUpdate('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
