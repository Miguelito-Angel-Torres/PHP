<?php

namespace App\Http\Controllers;

use App\Models\Actitude;
use Illuminate\Http\Request;
use Exception;

class ActitudController extends Controller
{
    public function get(){
        try{
            $actitud = Actitude::all();
            $mensaje = "Obtuvo Correctamente las Actitudes";
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $actitud
            ];       
        }catch(Exception $e){
            $resultado = [
                "mensaje" => $e->getMessage(),
                "data" => null
            ];  
        }

        return response()->json($resultado);
    }
}
