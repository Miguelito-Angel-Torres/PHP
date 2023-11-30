<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;
use Exception;
class BloqueController extends Controller
{
    public function get(){
        try{
            $bloque = Bloque::all();
            $mensaje = "Obtuvo Correctamente los bloques";
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $bloque
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
