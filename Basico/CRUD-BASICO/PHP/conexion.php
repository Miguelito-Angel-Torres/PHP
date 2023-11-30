<?php 
function conectarse(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "miscontactos";

    $conectar = new mysqli($servidor,$usuario,$password,$bd)
    or die("No se pudo conectar al Servidor");
    return $conectar;
}
$conexion = conectarse();
?>