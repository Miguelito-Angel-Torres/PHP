<?php
include "./conexion.php";
//Construyo el query para traer los registros en el select del HTML
$consulta = "SELECT email FROM contactos ORDER BY email";
//Ejecutar el query
$ejecutar_consulta = $conexion->query($consulta);
// Con un while recorre todos los registros generados de la Consulta anterior
//Construyo las opciones del select de forma dinamica con los registros de la consulta
while($registro = $ejecutar_consulta->fetch_assoc()) {
    echo "<option value='".$registro["email"]."'";
    if($_GET["contacto_slc"] == $registro["email"]) {
        echo " selected";
    }
    echo ">".$registro["email"]."</option>";
}
//$conexion->close();
?>