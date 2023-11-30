<?php 
// Pasos para conectarme a una BD MySQL con PHP
/* 1)Conectarme al BD, funcion para conectarse mysqli_connect necesita 4
    datos: 1)Servidor 2)Usuario de la BD 3)Password del Usuario de la BD) 4)Nombre de la BD*/
$conexion = mysqli_connect('localhost','root','','miscontactos') or die("Connection Failed");
// Crear una Consulta SQL:
$consulta = "SELECT * FROM `pais` ";
//Ejecutar Consulta SQL:
$ejecutar_consulta = mysqli_query($conexion,$consulta) or die ("No se pudo ejecutar la Consulta en la BD");

// Mostrar el resultado de ejecutar la consulta, dentro de un ciclo y en una variable voy a ingresar la funcion mysql_fetch_array:
// mysql_fetch_array : Devuelve en un arreglo,cada registro de la base de datos se guarda en una posicion de este arreglo
//var_dump(mysqli_fetch_array($ejecutar_consulta));
while($registro = mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["id_pais"]." - ".$registro["pais"]."<br/>";
}
//Cerra conexion
mysqli_close($conexion) or die ("Ocurrio un error al cerrar la Conexion a la BD");

?>

