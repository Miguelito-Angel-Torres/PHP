<?php 
    // Tiene que validar que la session siga activa:
    include("Sesion.php"); ?>
    Bienvenido:
    <?php echo $_SESSION["usuario"];?>
    <br/>
    Estas en otra pagina Segura con Sesiones en Php
    <br/>
    <a href="archivo_protegido.php">Ir a la primer pagina segura</a>
    <br/>
    <a href="Salir.php">SALIR</a>