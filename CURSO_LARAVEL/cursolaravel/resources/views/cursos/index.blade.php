@extends('layouts.plantilla')

@section('title','Index')

@section('content')
    <h1>Bienvenido a la pagina index</h1>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show',$curso)}}">{{$curso["name"]}}</a>
                <!-- {{route('cursos.show',$curso)}} -->
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection