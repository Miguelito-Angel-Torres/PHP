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
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            // metodo unsigned() permite definir ciertas caracteristicas de este campo
            // indicado que es una columna relacional
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombre');

            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            /*$table->foreignId('categoria_id')
                   ->nullable()
                   ->constraints('categorias')
                   ->cascadeOnUpdate()
                   ->nullOnDelete(); */

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
