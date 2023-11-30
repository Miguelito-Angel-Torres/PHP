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
        Schema::create('curriculares', function (Blueprint $table) {
            $table->id();
            $table->char('codCurso',10)->unique();
            $table->string('nomCurso',100);
            $table->char('especialidad',10)->nullable();
            $table->char('sisEvaluacion',10)->nullable();
            $table->unsignedTinyInteger('horTeoria')->nullable()->default(0);
            $table->unsignedTinyInteger('horPractica')->nullable()->default(0);
            $table->unsignedTinyInteger('horLaboratorio')->nullable()->default(0);
            $table->unsignedTinyInteger('creditos')->nullable();
            $table->string('preRequisitos',10)->nullable()->default('NINGUNO');
            $table->unsignedTinyInteger('ciclo')->nullable();
            $table->unsignedInteger('verCurricular')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculares');
    }
};
