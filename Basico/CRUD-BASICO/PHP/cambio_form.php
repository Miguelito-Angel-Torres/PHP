<!--Cuando mandemos el formulario para que se actualize los datos,cuando desahilitamos un formulario
un elemento,para que mandamos al formulario el valor de ese input automatico va vacio -->
<div>
    <label for="email">Email:</label>
    <input id="email" type="email" class="cambio" name="email_txt"
    placeholder="Email" title="Email" value="<?php echo $registro_contacto["email"] ?>" required
    disabled/>
    <input type="hidden" name="email_hdn" value="<?php echo $registro_contacto["email"] ?>">
</div>
<div>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" class="cambio" name="nombre_txt" 
    placeholder="Nombre"  title="Nombre" value="<?php echo $registro_contacto["nombre"] ?>" required/>
</div>
<div>
    <label for="m">Sexo:</label>
    <input type="radio" id="m" name="sexo_rdo" title="Sexo"
    value="M" <?php if($registro_contacto["sexo"] == "M"){ echo "checked";} ?> required/>&nbsp;<label for="m">Masculino</label>
    &nbsp;&nbsp;&nbsp;
    <input type="radio" id="f" name="sexo_rdo" title="Sexo"
    value="F" <?php if($registro_contacto["sexo"] == "F"){ echo "checked";} ?> required/>&nbsp;<label for="f">Femenino</label>
</div>
<div>
    <label for="nacimiento">Fecha Nac:</label>
    <input type="date" id="nacimiento" class="cambio" name="nacimiento_txt"
    title="Cumpleaño" value="<?php echo $registro_contacto["nacimiento"] ?>" required/>
</div>
<div>
    <label for="telefono">Telefono:</label>
    <input type="number" id="telefono" class="cambio" name="telefono_txt"
    placeholder="Escribe tu telefono" title="Telefono" value="<?php echo $registro_contacto["telefono"] ?>" required/>
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
        <input type="hidden" name="foto_hdn" value="<?php echo $registro_contacto["imagen"] ?>">
    </div>
    <div>
        <img src="<?php echo "../IMG/FOTOS/".$registro_contacto["imagen"]; ?>" alt=""/>
    </div>  
</div>
<div>
    <input type="submit" id="enviar-cambio" class="cambio" name= "enviar_btn"
    value="Cambiar"/>
</div>

