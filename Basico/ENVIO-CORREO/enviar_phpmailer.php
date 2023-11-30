<?php 
$de = $_POST["de_txt"];
$para = $_POST["para_txt"];
$asunto = $_POST["asunto_txt"];
$mensaje = $_POST["mensaje_txa"];

$cabeceras = "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-type:text/html;charset=iso-8859-1\r\n";
$cabeceras .= "From: $de \r\n";
// Como vamos adjuntar un archivo primero tenemos que subir ese archivo al servidor y posteriormente enviar el correo
$archivo = $_FILES["archivo_fls"]["tmp_name"];
$destino = $_FILES["archivo_fls"]["name"];

if(move_uploaded_file($archivo,$destino)){
    // Incluir los archivos
    include_once("class.phpmailer.php");
    // smtp para enviar , pop3 para recibir
    include_once("class.smtp.php");

    $mail = new PHPMailer(); //Crear un objeto de tipo PHPMailer;
    // Para pop3 es otra funcion
    $mail->IsSMTP(); // protocolo SMTP
    $mail->SMTPAuth =true; //autenticacion en el SMTP
    $mail->SMTPSecure = "ssl"; //SSL security 
    $mail->Host = "smtp.gmail.com"; // Servidor de SMTP de gmail;
    $mail->Port = 465;
    $mail->From = $de;
    $mail->AddAddress($para);
    $mail->Username = "mallquitorres1234@gmail.com";
    $mail->Password = "jjpld6pl9yiy1";
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;
    $mail->WordWrap = 50;
    $mail->MsgHTML($mensaje); //Se indica que el cuerpo del correo tendra formato html
    $mail->AddAttachment($destino); // accedemos al archivo que se subio al servidor y lo adjuntamos
    // Send() verifica si se envio el correo por PHPMailer
    if($mail->Send()){
        $respuesta = "El mensaje ha sido enviado con la clase PHPMAiler";
    }else{
        $respuesta = "Error: ".$mail->ErrorInfo;
    }

}else{
    $respuesta = "Ocurrio un Error al subir el archivo adjunto";
}
// Borrar un archivo del servidor
unlink($destino);
header("Location: formulario_phpmailer.php?respuesta=$respuesta");
?>