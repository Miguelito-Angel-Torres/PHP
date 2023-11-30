<?php
$conexion = mysqli_connect('localhost','root','','miscontactos') or die("Connection Failed");
// Insertar DATOS:
/*$Consulta = "INSERT INTO contactos(
    email,nombre,sexo,nacimiento,telefono,pais,imagen
) VALUES ('m@gmail.com','Mxl','M','2002-01-15','55555','Mexico','mxl.png')";
$ejecutar_consulta = mysqli_query($conexion,$Consulta);
echo "Se ha insertado los datos <br/>";*/

//Eliminacion Datos:
/*$Consulta = "DELETE FROM contactos WHERE email = 'm@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion,$Consulta);
echo "Datos Eliminados <br/>";*/

//Modificacion de Datos:
$Consulta = "UPDATE contactos set email ='12@gmail.com' where email = 'm@gmail.com'";
// Devuele un valor 1 indica true y 0 indica false;
$ejecutar_consulta = mysqli_query($conexion,$Consulta);
//echo $ejecutar_consulta;
echo "Se actualizo los datos <br/>";

//Consultar datos:
$Consulta = "SELECT * FROM contactos WHERE email = '12@gmail.com'";
$ejecutar_consulta = mysqli_query($conexion,$Consulta);

while($registro = mysqli_fetch_array($ejecutar_consulta)){
    echo $registro["email"]."---";
    echo $registro["nombre"]."---";
    echo $registro["sexo"]."---";
    echo $registro["nacimiento"]."---";
    echo $registro["telefono"]."---";
    echo $registro["pais"]."---";
    echo $registro["imagen"];
    echo "<br/>";
}
//Cerra conexion
mysqli_close($conexion) or die ("Ocurrio un error al cerrar la Conexion a la BD");

?>