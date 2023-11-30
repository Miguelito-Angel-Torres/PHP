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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // nullable() indica si queda basico colocar null
            $table->string('password');
            $table->rememberToken(); // Mantener la Sesion Iniciada
            $table->timestamps(); // Creacion de columnas create_at update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Hace el prceso contrario : Eso indica que elimina la tabla creada users
        Schema::dropIfExists('users');
    }
};
