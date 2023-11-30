@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="name" id="nombre" placeholder="Nombre"
        value="{{old('name')}}">
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br/>
        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo" placeholder="Correo"
        value="{{old('correo')}}">
        @error('correo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br/>
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10">{{old('mensaje')}}</textarea>
        @error('mensaje')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br/>
        <button type="submit">Enviar mensaje</button>
    </form>
    @if (session('info')){
        <script>
            alert("{{session('info')}}");
        </script>
    }
    @endif
@endsection