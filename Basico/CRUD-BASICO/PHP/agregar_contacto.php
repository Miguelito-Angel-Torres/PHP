<?php 
// Asigno a variables de php los valores que vienen del formulario:
$email = $_POST['email_txt'];
$nombre = $_POST['nombre_txt'];
$sexo = $_POST['sexo_rdo'];
$nacimiento = $_POST['nacimiento_txt'];
$telefono = $_POST['telefono_txt'];
$pais = $_POST['pais_slc'];

// Dependiendo el sexo ponemos una imagen predeterminada: No es requirido el input(file):
$imagen_generica = ($sexo == "M")? "amigo.png":
"amiga.png";

//Verificamos que no exista previamente el email del usuario en la BD:
include "./conexion.php";
$consulta = "SELECT * FROM contactos WHERE email = '$email'";
$ejecutar_consulta = $conexion->query($consulta);
// num_rows : Devuelve el numero de registro que trago esa consulta
$num_regs =  $ejecutar_consulta->num_rows;
echo $num_regs;

if($num_regs ==0){
    //Se ejecuta la funcion para subir la imagen
    include("./funciones.php");
    $tipo = $_FILES["foto_fls"]["type"];
    $archivo = $_FILES["foto_fls"]["tmp_name"];
    
    $se_subio_imagen = subir_imagen($tipo,$archivo,$email);
    

    // Si la foto en el formulario viene vacia,entonces le asigno el valor 
    // de la imagen generica,sino entonces el nombre de la foto que se subio.
    // funcion (subir_imagen): va tener un return el nombre de la imagen
    // empty() : Funcion que evalua si una variable esta vacia
    //Si esta vacio devuelve un true y no esta vacio devuelve un False;
    $imagen = empty($archivo)?$imagen_generica:$se_subio_imagen;

    if($imagen == false){
        $mensaje = "Solo se admiten imagenes";
    }else{
        $consulta = "INSERT INTO contactos(email,nombre,sexo,nacimiento,telefono,pais,imagen)
        VALUES ('$email','$nombre','$sexo','$nacimiento','$telefono','$pais','$imagen')";
        $ejecutar_consulta = $conexion->query($consulta);;
        if($ejecutar_consulta) $mensaje = "Se ha dado de alta al contacto con el email <b>$email</b>";
        else $mensaje = "No se pudo dar de alta al contacto con el email <b>$email</b> por que ya existe";
    }

}else{
    $mensaje = "No se pudo dar alta al contacto con el email: ".$email." por ya existe";
}

$conexion->close();


header("Location: ./alta_contacto.php?mensaje=$mensaje");

?>