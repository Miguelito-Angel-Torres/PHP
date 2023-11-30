<?php 

/*Asigno a variables php los valores que vienen del formulario
Como el campo del email esta deshabilitado en el form php no lo reconoce
por eso tengo que guardar su valor en un campo oculto
*/ 
$email = $_POST["email_hdn"];
$nombre = $_POST["nombre_txt"];
$sexo = $_POST["sexo_rdo"];
$nacimiento = $_POST["nacimiento_txt"];
$telefono = $_POST["telefono_txt"];
$pais = $_POST["pais_slc"];

include("./conexion.php");
// Verificar que el usuario no este duplicado
$consulta = "SELECT * FROM contactos WHERE email='$email'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs ==1){
    /*Si la foto viene vacia asignamos el valor del boton oculto de la
    foto que tiene el valor anterior a la busqueda,sino subo la nueva foto y reemplazo el valor*/ 
    if(empty($_FILES["foto_fls"]["tmp_name"])){
            $imagen = $_POST["foto_hdn"];
    }else{
        include("./funciones.php");
        $tipo = $_FILES["foto_fls"]["type"];
        $archivo = $_FILES["foto_fls"]["tmp_name"];

        $imagen = subir_imagen($tipo,$archivo,$email);
    }
    
    if($imagen == false){
        $mensaje = "No se puede archivos";
    }else{
        //Actualizamos en una base de datos:
        $Consulta = "UPDATE contactos set nombre='$nombre', sexo='$sexo',
        nacimiento = '$nacimiento',telefono = '$telefono', pais = '$pais',
        imagen = '$imagen' WHERE email = '$email'"; 
        $ejecutar_consulta = $conexion->query($Consulta);
        if($ejecutar_consulta){
            $mensaje="Se han hecho cambios en los datos del contacto ";
        }else{
            $mensaje="No se pudieron hacer los cambios en los datos ";
        }

    }
     
}else{
    $mensaje="No se pudieron hacer cambio porque no existe o duplicado ";
}
$conexion->close();

header("Location: cambios_contacto.php?mensaje=$mensaje");


?>