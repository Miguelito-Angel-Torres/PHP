@extends('layouts.plantilla')

@section('title','Create')

@section('content')
    <h1>Bienvenido a la pagina create</h1>
    
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        <label for="name">Nombre</label>
        <!--metodo old indica que se va mantener lo que escribe si cumple la validacion -->
        <input type="text" name="name" id="name" placeholder="Nombre:"
        value="{{old('name')}}">
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30"  rows="10">{{old('descripcion')}}</textarea>
        @error('descripcion')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="categoria" placeholder="Categoria:"
        value="{{old('categoria')}}">
        @error('categoria')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit" >Enviar Formulario</button>
    </form>
@endsection