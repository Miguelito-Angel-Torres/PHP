<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;

use App\Models\Curso;
use Illuminate\Http\Request;
/* El controllador puede manipular al modelo que cottiene la estructura de la base de datos */ 
/*Codigo necesario para realizar operaciones de datos*/ 
class CursoController extends Controller
{
    // El nombre index hace referencia pagina principal
    public function index(){
        //Recuperar todos los registros de la tabla curso pero con paginacion incluido(cursos?page=2)
        // Se tiene que incluir la libreria "tailwindcss.com"  al proyecto para manipular el diseño de la paginacion
        $cursos = Curso::orderBy('id','desc')->paginate();
        return view('cursos/index',compact('cursos'));
    }

    // 
    public function create(){
        return view('cursos/create');
    }
    // El nombre show encargada mostrar un elemento particular
    public function show(Curso $curso){
        //$curso = Curso::find($id);
        //return $cursos;

        // Pasar variable a la vista
        //compact('curso'); ['curso' => $curso];
        return view('cursos/show',compact('curso'));
    }

    public function store(StoreCurso $request){
        // Estoy declarando que el $request es un objeto de StoreCurso de igual manera va 
        // almacenar toda la informacion que mandemos del formulario y lo almacenara en el objeto request
        //$request es un objeto de tipo Request para almacenar datos
        
        /*$curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/
        
        $curso = Curso::create(
            $request->all()
        );

        return redirect()->route('cursos.show',$curso);

    }

    public function edit(Curso $curso){
        
        return view('cursos/edit',compact('curso'));
    }

    public function update(StoreCurso $request,Curso $curso){
       
        $curso->update($request->all());
        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save();*/

        
        return redirect()->route('cursos.show',$curso);
    }

    /*public function delete(Curso $curso){
        $curso = Curso::find($curso->id);
        $curso->delete();
        return redirect()->route('cursos.index');
    }*/

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');

    }
   
}
