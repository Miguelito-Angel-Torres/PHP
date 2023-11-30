<!--Tengo que agregar ,porque en el index no se muestra el option -->
<link rel="stylesheet" href="../CSS/mis_contactos.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="../JS/mis_contactos.js"></script>

<form  class="formulario" name="baja_frm"
action="./eliminar_contacto.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Baja de Contacto</legend>
        <div>
            <label for="email">Email</label>
            <select name="email_slc" class="cambio" id="email" required>
                <option value="">---</option>
                <?php include("select_email.php") ?>
            </select>
        </div>
        <div>
            <input type="submit" id="enviar-baja" class="cambio"
            name="enviar_btn" value="Eliminar"/>
        </div>
        <?php include("./mensajes.php")?>
    </fieldset>
</form>