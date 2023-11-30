<?php

if(!$registro_contacto["pais"]){ include "./conexion.php";}
$consulta = "SELECT * FROM pais ORDER BY pais";
$ejecutar_consulta = $conexion->query($consulta);

    //El registro obtiene el Array de la Consulta
//var_dump($ejecutar_consulta->fetch_assoc());
while($registro = $ejecutar_consulta->fetch_assoc()){

        $nombre_pais = utf8_encode($registro["pais"]);
        echo "<option value='$nombre_pais'";
        if($nombre_pais == utf8_decode($registro_contacto["pais"])){
            echo " selected";
        }
        echo ">$nombre_pais</option>";
    }

?>

