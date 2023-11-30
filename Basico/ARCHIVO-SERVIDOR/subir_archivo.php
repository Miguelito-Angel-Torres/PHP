<?php 
    // Cuando mandamos un archivo se crea una variable global $_FILES
    // Y cuando mandamos un archivo al servidor se genera 5 propiedades
    foreach ($_FILES["archivo_fls"] as $clave => $valor){
        echo "Propiedades: $clave -- Valor: $valor <br/>";}
    //Como subir un fichero al servidor:
    $archivo = $_FILES["archivo_fls"]["tmp_name"];
    //Dejar el mismo nombre que tenia el archivo originalmente
    $destino = "../ARCHIVOS/".$_FILES["archivo_fls"]["name"];
    /*if($_FILES["archivo_fls"]["type"] == "text/plain"){
        move_uploaded_file($archivo,$destino);
        echo "Archivo Subido";
    }else{
        
        echo "Solo se admiten archivos de textos planos <br/><a href=\"enviar_archivo.php\">REGRESAR</a>";
    }*/
    move_uploaded_file($archivo,$destino);
    //Funcion que me permite subir el fichero al servidor:
?>