<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mexflix</title>
    <meta name="description" content="Bienvenidos a Mexflix tus peliculas y series favoritas">
    <link rel="shortcut icon" type="image/png" href="./PUBLIC/IMG/favicon.png">
    
    
    <link rel="stylesheet" href="./PUBLIC/CSS/mexflix.css">
</head>
<body>
    <header class="container  center  header">
        <div    class="item  i-b  v-middle  ph12  lg2 lg-left ">
            <h1 class="logo">Mexflix</h1>
        </div>
        <?php if($_SESSION['ok']){ ?>
        <nav  class="item  i-b  v-middle  ph12  lg10  lg-right menu">
            <ul class="container">
                <li class="nobullet  item  inline"><a href="./">Home</a></li>
                <li class="nobullet  item  inline"><a href="movieseries">MovieSeries</a></li>
                <li class="nobullet  item  inline"><a href="usuarios">Usuarios</a></li>
                <li class="nobullet  item  inline"><a href="status">Status</a></li>
                <li class="nobullet  item  inline"><a href="salir">Salir</a></li>
            </ul>
        </nav>
        <?php } ?>
    </header>
    <main class="container  center  main">