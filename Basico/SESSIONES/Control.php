<?php
    /* Correcto mandar al archivo ("Archivo-protegido") caso contrario 
      nos va regresar al archivo del formulario (verificar sus datos)*/    
    //Si son correcto va crear la Session , acaso contrario un mensaje de error.
    
    
    if($_POST["usuario_txt"] == "m" && $_POST["password_txt"] == "m1"){
        // Inicio la Sesion
        session_start();
        // Declaro mis variables de sesion
        // Para crear variables de Sesion
        // Nos va permitir si la sesion sigue vigente
        $_SESSION["autentificado"] = true;
        $_SESSION["usuario"] = $_POST["usuario_txt"];

        header("Location:  archivo_protegido.php");
    }else{
        header("Location: index.php?error=si");
    }
?>
