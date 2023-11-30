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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->integer('edad');
            $table->char('dni',8);
            $table->string('correo');
            $table->char('telefono',20);

            $table->foreignId('bloque_id')
                  ->nullable()
                  ->constrained('bloques')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            
            $table->foreignId('actitud_id')
                  ->nullable()
                  ->constrained('actitudes')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();

            $table->string('semestre');
            $table->string('mes');
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
        Schema::dropIfExists('alumnos');
    }
};
