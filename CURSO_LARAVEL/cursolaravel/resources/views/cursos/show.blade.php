@extends('layouts.plantilla')

@section('title','Curso '.$curso["id"])

@section('content')
        <h1>Bienvenido al curso {{$curso["name"]}}</h1>
        <a href="{{route('cursos.index')}}">Volver a Cursos</a>
        <br>
        <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
        
        
        <p><strong>Categoria: {{$curso['categoria']}}</strong></p>
        <p>{{$curso['descripcion']}}</p>

        <form action="{{route('cursos.destroy',$curso)}}" method="post">
                @csrf
                @method('delete')
                <button type="submit" >Eliminar</button>
        </form>
@endsection
   