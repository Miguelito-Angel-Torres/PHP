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
        Schema::create('aulas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->char('codAula',10)->unique();
            $table->unsignedTinyInteger('capacidad')->nullable();
            $table->string('tipSilla',100)->nullable();
            $table->string('tipEntrada',100)->nullable();
            $table->unsignedTinyInteger('taburete')->nullable();
            $table->string('tipPizarra')->nullable();
            $table->unsignedTinyInteger('proyector')->nullable();
            $table->unsignedTinyInteger('pcAlumno')->nullable();
            $table->unsignedTinyInteger('pcDocente')->nullable();
            $table->unsignedTinyInteger('canPuertas')->nullable();
            $table->unsignedTinyInteger('equVentilacion')->nullable();
            $table->text('observacion')->nullable();
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
        Schema::dropIfExists('aulas');
    }
};
