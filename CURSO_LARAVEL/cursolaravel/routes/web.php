<?php
// Rutas de Url para dirigirnos a paginas 
// Se puede incluir en una unica ruta 

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
//Asignar un Controlador a una Ruta
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


//Grupo de rutas:

Route::get('/', HomeController::class)->name('home');

// Metodo view , se va usar ese metodo para "Nosotros" es para mostrar contenido estatico y no se conecta con la bd:
Route::view('nosotros','nosotros')->name('nosotros');

Route::controller(ContactanosController::class)->group(function(){
    Route::get('contactanos','index')->name('contactanos.index');
    Route::post('contactanos','store')->name('contactanos.store');
});


// Definicion Primero:
/*Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{id}','show')->name('cursos.show');
    // Nueva ruta que se encargar de recibir la informacion que mandamos desde el formulario
    Route::post('cursos','store')->name('cursos.store');

    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');

    Route::get('cursos/{curso}/delete','delete')->name('cursos.delete');

    Route::put('cursos/{curso}','update')->name('cursos.update');

    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
    
});*/

// Definicion Segunda:
// Colocar la url identificativa:'cursos'
// el metodo se encarga de terminar que las rutas que necesita un parametros
// el parametro se va almacenar en un variable llamada 'curso' eso indicando el singular 
// de la ruta general, tambien termina el nombre de la funcion dependiendo la accion
// que realiza y el name de cada ruta
//Route::resource('asignaturas',CursoController::class)->parameters(['asignaturas' => 'curso'])->names("cursos");
Route::resource('cursos',CursoController::class);
/*Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) {
    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido al Curso: $curso";
    }
})*/



