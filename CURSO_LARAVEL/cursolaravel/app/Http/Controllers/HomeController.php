<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Metodo __invoke Indica que esta administrando una unica ruta
    public function __invoke()
    {
        // Metodo view que se dirigue a la carpeta resources/views
        return view('home');
    }
}


