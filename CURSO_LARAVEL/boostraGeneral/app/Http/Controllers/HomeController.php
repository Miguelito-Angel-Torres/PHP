<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Semestre;
use App\Models\Docente;
use Exception;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        return view('asistencia/index');
    }

    public function getSemestre(){
        try {
            $semestre = Semestre::all();
            $mensaje = "Obtuvo Correctamente los Semestre";
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $semestre
            ]; 
            
        } catch (Exception $e) {
            $resultado = [
                "mensaje" => $e->getMessage(),
                "data" => null
            ];  
            
        }
        return response()->json($resultado);

    }

    public function getDocente(){
        try {
            // Referencia como un Inicio de Sesion:
            $codigo_Docente = strval("ABHh21");
            $Do = DB::select('call sp_GetDocente(?)',array($codigo_Docente));
            ($Do)?          $mensaje = "Obtuvo Correctamente Docente"
                                : $mensaje = "No se encontro el Docente";
            
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $Do
            ];
        } catch (Exception $e) {
            $resultado = [
                "mensaje" => $e->getMessage(),
                "data" => null
            ];  
            
        }
        return response()->json($resultado);
    }


    
    public function getConsultaSemestreApi($semestre,$codDocente){
        try {
            
            $Se = DB::select('call sp_ConsultaSemestre(?,?)',array($semestre,$codDocente));
            ($Se)?       $mensaje = "Consulta de Semestre Correctamente"
                        :$mensaje = "Consulta de Semestre Incorrecta";
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $Se
            ];
        } catch (Exception $e) {
            $resultado = [
                "mensaje" => $e->getMessage(),
                "data" => null
            ];  
            
        }
        return response()->json($resultado);
    }




       
   
}
