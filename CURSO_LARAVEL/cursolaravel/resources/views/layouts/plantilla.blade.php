<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- indica que va ser distinto todas las paginas -->
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!--favicon-->
    <!--estitos-->
    <style>
        .active{
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <!--El include va comenzar despues de la carpeta views -->
    <!--header-->
    @include('layouts.partials.header')
    <!--nav-->
    @yield('content')
    <!--footer-->
    @include('layouts.partials.footer')
    <!--sript-->
</body>
</html>