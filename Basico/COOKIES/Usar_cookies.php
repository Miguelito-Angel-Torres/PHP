<?php 
//var_dump($_COOKIE);
// tenemos $_COOKIE para las variables que sea crea en tipo de cookie
if(!$_COOKIE["idioma_solicitado"]){
    header("Location: Pedir_idioma.php");
}else if($_COOKIE["idioma_solicitado"] == "es"){
    header("Location: Espanol.php");    
}else if($_COOKIE["idioma_solicitado"] == "en"){
    header("Location: Ingles.php");
}
?>