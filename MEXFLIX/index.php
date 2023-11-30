<?php
//Archivo Autoload que nos va permitir la carga dinamica de todas las clases(Controlador,Modelo,Vista) que necesite
// para evitar hacer require todos los aarchivos:
require_once("CONTROLLERS/Autoload.php");

$autload = new Autoload();


$route= isset($_GET['r'])? $_GET['r']: 'home';
$mexflix = new Router($route); 
$a = new StatusModel();
$ab= new UsersModel();
$abc = new MovieSeriesModel();