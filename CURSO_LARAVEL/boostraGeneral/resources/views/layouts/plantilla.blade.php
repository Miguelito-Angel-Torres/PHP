<!DOCTYPE html>
<html lang="en" data-dark>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="{{ Session::token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body data-dark>
     <!--El include va comenzar despues de la carpeta views -->
    <!--header-->
    @include('layouts.partials.header')
    <!--nav-->
    @yield('content')
    <!--footer-->
    @include('layouts.partials.footer')
</body>