<?php 
    /*  variable Global de Tipo Arreglo ($_GET $_POST)
        Funcion isset() : Evalua que si esta creado la variable y que tenga un valor que no sea null
        Funcion isset() : Va evaluar si se ha definido esa variable (si esta creado la variable)*/     

    /*if(isset($_GET["enviar_btn"])){echo "Metodo Get: ".$_GET["nombre_txt"]."<br/>".$_GET["password_txt"];}
    else if(isset($_POST["enviar_btn"])){echo "Metodo Post: ".$_POST["nombre_txt"]."<br/>".$_POST["password_txt"];};*/
    $nombre = "m";
    $password = "m1";
    if(isset($_GET["enviar_hdn"])){
        if($nombre == $_GET["nombre_txt"] && $password == $_GET["password_txt"]){
            echo "Nombre:".$_GET["nombre_txt"]."<br/> Password: ".$_GET["password_txt"]."<br/> Sexo:".$_GET["sexo_rdo"]."<br/>";
        }else{
            // header() : Sirver para dirigir el flujo de una aplicacion php (Por la Url)
            header("Location: formulario.php?error=si");
        }
    } else if (isset($_POST["enviar_hdn"])){
        if($nombre == $_POST["nombre_txt"] && $password == $_POST["password_txt"]){
            echo "Nombre:".$_POST["nombre_txt"]."<br/> Password: ".$_POST["password_txt"]."<br/> Sexo:".$_POST["sexo_rdo"]."<br/>";
        }else{
            // header() : Sirver para dirigir el flujo de una aplicacion php (Por la Url)
            header("Location: formulario.php?error=si");
        }
    }
?>

