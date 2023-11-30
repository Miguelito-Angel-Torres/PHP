@extends('layouts.plantilla')

@section('title','Create')

@section('content')
    <h1>Bienvenido a la pagina edit</h1>
    
    <form action="{{route('cursos.update',$curso)}}" method="post">
        @csrf
        @method('put')
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{old('name',$curso->name)}}"  placeholder="Nombre:">
        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion"  
        cols="30" rows="10">{{old('descripcion',$curso->descripcion)}}</textarea>
        @error('descripcion')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" value="{{old('categoria',$curso->categoria)}}"
        placeholder="Categoria:">
        @error('categoria')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit" >Editar Formulario</button>
    </form>
@endsection