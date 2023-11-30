<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumno;
use App\Models\Actitude;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Bloque;
use Exception;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function index(){
        $alumnos = Alumno::orderBy('id','desc')->paginate(5);
        $alumno = new Alumno();
        $actitud = Actitude::pluck('actitud','id');
        $bloque = Bloque::pluck('bloque','id');
        return view('alumnos/index',compact('alumnos','alumno','actitud','bloque'));
    }


    public function get($alumno){
        try{
            $id = isset($alumno)? $alumno : 0;
            $alumnos = DB::select('CALL sp_GetAlumnos(?)',array($id));
            ($id == 0)? $mensaje = "Obtuvo Correctamente los Alumnos"
            :$mensaje = "Obtuvo Correctamente el Alumno";
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $alumnos
            ];  
        }catch (Exception $e){
            $resultado = [
                "mensaje" => $e->getMessage(),
                "data" => null
            ];
        }
        return response()->json($resultado);
        /*$alumnos =  Alumno::orderBy('id','desc')->paginate(5);
        $resultado = [
            "mensaje" => "Ingreso Correctamente los Alumnos",
            "data" => $alumnos
        ];return response()->json($resultado);*/
    }

    public function dele(Alumno $alumno){
        try{
            $alumno->delete();
            $resultado = [
                "mensaje" => "Alumno eliminado Exitosamente: $alumno->name $alumno->apellido"
            ];  
        }catch (Exception $e){
            $resultado = [
                "mensaje" => $e->getMessage(),
            ];
        }
        return response()->json($resultado);
    }




    



/*$resultado = [
            "mensaje" => "Ingreso Correctamente los Alumnos",
            "data" => $alumnos
        ];  
        return response()->json($resultado);*/ 


    public function destroy(Alumno $alumno){
        $alumno->delete();
        return redirect()->route('alumnos.index')
            ->with('success', "Alumno eliminado Exitosamente: $alumno->name $alumno->apellido");
        }

    public function edit(Alumno $alumno){
        $alumnos = Alumno::orderBy('id','desc')->paginate(5);
        $actitud = Actitude::pluck('actitud','id');
        $bloque = Bloque::pluck('bloque','id');
        
        
        return view('alumnos/index', compact('alumnos','alumno','actitud','bloque'));
    }
    
    public function store(StoreAlumno $request){
        dd($request->all());exit;

        if($request->id == null){
            //return $request;
           $alumno = Alumno::create($request->all());
           $success = 'Alumno creado con Exito';
        }else{
            $alumno = Alumno::find($request->id);

            $alumno->update($request->all());
            $success = 'Alumno actualidazo con Exito';
        }

        /*return redirect()->route('alumnos.index')
        ->with('success', $success);*/
        $alumnos = Alumno::orderBy('id','desc')->paginate(5);
        return compact('success','alumnos');
    }

    public function set(StoreAlumno $request){
        try {
            if($request->id == null){
               
                //dd($request->all());exit;
                $alumno = Alumno::create($request->all());
                $mensaje = "Alumno $request->name $request->apellido creado con Exito";
            }else{
                
                //dd($request->all());exit;
                $alumno = Alumno::find($request->id);
                $alumno->update($request->all());
                $mensaje = "Alumno $request->name $request->apellido actualizado con Exito";
            }
            $resultado = [
                "mensaje" => $mensaje,
                "data" => $alumno,
            ];
        } catch (Exception $e) {
            $resultado = [
                "mensaje" => $e->getMessage(),
            ];
        }
        return response()->json($resultado);

    }

    
    
}
//https://www.youtube.com/watch?v=IJSrPKlJixA&t=3405s