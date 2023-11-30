<?php 
    // Trabajas con Sesion hay que iniciarla:
    session_start();
    /* Evaluo que la session continue verificando una de las variables
      creadas en control.php,cuando esta ya no coincida con su valor
      inicial se redirije al archivo de salir.php
    */
    // Indica si no existe o es falso
    if(!$_SESSION["autentificado"]){
        header("Location: Salir.php");
    }

?>