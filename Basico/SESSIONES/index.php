<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessiones </title>
</head>
<body>
    <!--Las Sessiones: Son el metodo de seguridad que se queda alojada en el servidor,
    entonces,ejem: Cuando entramos a nuestro correo electronico ,y nos autentifica estan creando
    una session arevez de estas aplicaciones o servicios -->
    <form name="autenficacion_frm" action="./Control.php"
    method="post" enctype="application/x-www-form-urlencoded">
        <?php 
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
            if($_GET["error"] == "si"){
                echo "<span>Verifica tus Datos</span>";
            }else{
                echo "Introduce tus datos";}
        ?>
        <br/>
        <label for="">Usuario</label>
        <input type="text" name="usuario_txt"/>
        <br/>
        <label for="">Password</label>
        <input type="password" name="password_txt">
        <br/><br/>   
        <input type="submit" name="entrar_btn" value="Entrar"> 
    </form>
    
</body>
</html>
