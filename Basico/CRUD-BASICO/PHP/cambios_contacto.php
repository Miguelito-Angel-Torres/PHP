<link rel="stylesheet" href="../CSS/mis_contactos.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../JS/mis_contactos.js"></script>
<script>
    
    document.addEventListener('DOMContentLoaded',e =>{
        listaContactos()
        
    });

    function listaContactos(){
        const $contacto = document.querySelector(".form-contacto");
        const $lista = $contacto.querySelector(".contacto-lista");
        $lista.onchange = seleccionarContacto;
        

        function seleccionarContacto(){
        // En la barra de navegacion 
        window.location = "?contacto_slc="+$lista.value;
    }


    }
<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
?>
</script>
<form  class="formulario form-contacto" name="cambio_frm" 
action="./modificar_contacto.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Cambio de Contacto</legend>
        <div>
            <label for="contacto-lista">Contacto:</label>
            <select class="cambio contacto-lista" name="contacto_slc" id="contacto-lista" required>
                <option value="">---</option>
                <?php include("select_email.php") ?>
                
            </select>
        </div>
        <?php 
            if($_GET["contacto_slc"]!=null){
                $conexion2 = conectarse();
                $contacto = $_GET["contacto_slc"];
                $consulta_contacto = "SELECT * FROM contactos WHERE email = '$contacto'";
                $ejecutar_consulta_contacto = $conexion2->query($consulta_contacto);
                $registro_contacto =  $ejecutar_consulta_contacto->fetch_assoc();

                include("cambio_form.php");
            }
            include("./mensajes.php")
        ?>

    </fieldset>

</form>