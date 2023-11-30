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
        Schema::create('docentes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->char('codDocente',10)->unique();
            $table->char('codUni',10)->nullable();
            $table->string('apePaterno',100);
            $table->string('apeMaterno',100);
            $table->string('nombres',100);
            $table->string('depAcademico',5)->nullable();
            $table->string('telefono',50)->nullable();
            $table->string('celular',50)->nullable();
            $table->string('email',225)->nullable();
            $table->string('dedicacion',10)->nullable();
            $table->date('fecNacimiento')->nullable();
            $table->char('sexo',1)->nullable();
            $table->string('direccion',200)->nullable();
            $table->text('observacion')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('condicion',100)->nullable();
            $table->boolean('estado')->nullable()->default(false);
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
        Schema::dropIfExists('docentes');
    }
};
