<?php 
$de = $_POST["de_txt"];
$para = $_POST["para_txt"];
$asunto = $_POST["asunto_txt"];
$mensaje = $_POST["mensaje_txa"];
// La funcion gmail necesita 4 parametros:(para quien el correo,el asunto,el mensaje,las cabeceras: Le podemos decir 
//si se va enviar formato en texto plano o formato de texto html(opcional))
$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type:text/html;charset=iso-8859-1\r\n";
$cabeceras .= "From: $de \r\n";
// Funcion email:
// Necesitamos el SMTP (motor o servidor:que de salia todas las funciones SMTP ,permite enviar correo electronico)
mail($para,$asunto,$mensaje,$cabeceras);
if(mail($para,$asunto,$mensaje,$cabeceras)){
    $respuesta = "El mensaje ha sido enviado";
}else{
    $respuesta = "Ocurrio un Error no se enviaron los datos";
}
header("Location: formulario_email.php?respuesta=$respuesta");
?>