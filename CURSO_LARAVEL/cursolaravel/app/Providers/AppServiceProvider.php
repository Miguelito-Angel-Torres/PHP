<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Pegar la direccion de la Carpeta:
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Para traducir la url:
        Route::resourceVerbs(
            [
                'create' => 'crear',
                'edit' => 'editar'
            ]
            );
    }
}
