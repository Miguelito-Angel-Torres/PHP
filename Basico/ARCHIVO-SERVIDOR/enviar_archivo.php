<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir ARCHIVOS AL SERVIDOR CON PHP</title>
</head>
<body>
    <!-- multipart/form-data : Indica que vamos adjuntar un fichero -->
    <form name="enviar_archivo_frm" action="./subir_archivo.php" method="post" enctype="multipart/form-data">
    <input type="file" name="archivo_fls"/>
    <input type="submit" name="subir_btn" value="Subir Archivo">
    </form>
</body>
</html>