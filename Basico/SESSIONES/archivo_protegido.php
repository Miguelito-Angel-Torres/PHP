<?php 
    // Tiene que validar que la session siga activa:
    include("Sesion.php"); ?>
    Bienvenido:
    <?php echo $_SESSION["usuario"];?>
    <br/>
    Estas en pagina Segura con Sesiones en Php
    <br/>
    <a href="Archivo_protegido2.php">Ir a otra pagina segura</a>
    <br/>
    <a href="Salir.php">SALIR</a>
