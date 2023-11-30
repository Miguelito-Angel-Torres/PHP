<?php 
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
$op = $_GET["op"];
switch ($op) {
    case 'alta':
        $contenido = "./PHP/alta_contacto.php";
        $titulo =  "Alta de Contacto";
        break;
    case 'baja':
        $contenido = "./PHP/baja_contacto.php";
        $titulo =  "Baja de Contacto";
        break;
    case 'cambios':
        $contenido = "./PHP/cambios_contacto.php";
        $titulo =  "Cambio de Contacto";
        break;
    case 'consultas':
        $contenido = "./PHP/consulta_contacto.php";
        $titulo =  "Consulta de Contacto";
        break;
    default:
        $contenido = "./PHP/home.php";
        $titulo =  "Mis Contactos v1";
        break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="./CSS/mis_contactos.css">
    <script src="./JS/mis_contactos.js"></script>
</head>
<body>
    
    <section id="contenido">
        <nav>
            <ul>
                <li><a class="cambio" href="index.php">Home</a></li>
                <li><a class="cambio" href="./PHP/alta_contacto.php">Alta de Contacto</a></li>
                <li><a class="cambio" href="./PHP/baja_contacto.php">Baja de Contacto</a></li>
                <li><a class="cambio" href="./PHP/cambios_contacto.php">Cambios de Contacto</a></li>
                <li><a class="cambio" href="?op=consultas">Consultas de Contacto</a></li>
            </ul>
        </nav>
        <section id="principal">
            <?php include($contenido) ?>
        </section>
    </section>
</body>
</html>