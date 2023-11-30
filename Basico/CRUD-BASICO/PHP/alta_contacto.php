<!--Tengo que agregar ,porque en el index no se muestra el option -->
<link rel="stylesheet" href="../CSS/mis_contactos.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../JS/mis_contactos.js"></script>

<!-- -->
<?php error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); ?>
<form id="alta-contacto" class="formulario" name="alta_frm" action="./agregar_contacto.php"
method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Alta de Contacto</legend>
        <div>
            <label for="email">Email:</label>
            <input id="email" type="email" class="cambio" name="email_txt"
            placeholder="Email" title="Email" required/>
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" class="cambio" name="nombre_txt" 
            placeholder="Nombre" required title="Nombre" required/>
        </div>
        <div>
            <label for="m">Sexo:</label>
            <input type="radio" id="m" name="sexo_rdo" title="Sexo"
            value="M" required/>&nbsp;<label for="m">Masculino</label>
            &nbsp;&nbsp;&nbsp;
            <input type="radio" id="f" name="sexo_rdo" title="Sexo"
            value="F" required/>&nbsp;<label for="f">Femenino</label>
        </div>
        <div>
            <label for="nacimiento">Fecha Nac:</label>
            <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt"
            title="Cumpleaño" required/>
        </div>
        <div>
            <label for="telefono">Telefono:</label>
            <input type="number" id="telefono" class="cambio" name="telefono_txt"
            placeholder="Escribe tu telefono" title="Telefono" required/>
        </div>
        <div>
            <label for="pais">Pais:</label>
            <select name="pais_slc" class="cambio"  id="pais" required>
                <option value="">---</option>
                <?php include("select_pais.php") ?>
            </select>
        </div>
        <div>
            <label for="foto">Foto:</label>
            <div class="adjuntar-archivo cambio">
                <input type="file" id="foto" name="foto_fls" title="Foto"/>
            </div>
        </div>
        <div>
            <input type="submit" id="enviar-alta" class="cambio" name= "enviar_btn"
            value="Agregar"/>
        </div>
        <?php include("./mensajes.php")?>
    </fieldset>
</form>