<?php

use App\Http\Controllers\ActitudController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home.index');

    Route::get('semestreApi','getSemestre')->name('semestreApi.getS');

    //Cambiar eso al futuro:
    Route::get('docenteApi','getDocente')->name('docente.getD');
    //////////////////////////
    Route::get('semestreConsultaApi/{semestre}/{codDocente}','getConsultaSemestreApi')->name('consultaS.getS');
});

Route::controller(AlumnoController::class)->group(function(){
    Route::get('alumnos','index')->name('alumnos.index');
    Route::post('alumnos','store')->name('alumnos.store');
    Route::delete('alumnos/{alumno}','destroy')->name('alumnos.destroy');
    Route::get('alumnos/{alumno}/edit','edit')->name('alumnos.edit');

    //Api:
    Route::get('/alumnosApi/{alumno}','get')->name('alumnosApi.get');
    Route::delete('/alumnosApi/{alumno}','dele')->name('alumnosApi.delete');
    Route::post('/alumnosApi','set')->name('alumnosApi.set');

});

Route::controller(ActitudController::class)->group(function(){
    //Api:
    Route::get('/actitudesApi','get')->name('actitudesApi.get');    
});

Route::controller(BloqueController::class)->group(function(){
    //Api
    Route::get('/bloquesApi','get')->name('bloquesApi.get');
});

