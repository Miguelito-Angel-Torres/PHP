<br/>
<div>
    <input type="hidden" name="op" value="consultas">
    <label for="buscador">Buscador:</label>
    <input type="search" id="buscador" name="q" placeholder="Escribe tu busqueda" title="Buscador">
</div>
<input type="submit" id="enviar-buscar" class="cambio" name="enviar_btn"
value="Buscar"/>
<?php 
if($_GET["q"]!=null){
    $busqueda = $_GET["q"];

    // Match() Cuando Concida los campos sismo que defiimos en el sql
    // Against() Pasa por parametro cual es la concidencia que quiero buscar (4 palabras)
    $consulta = "SELECT * FROM contactos WHERE MATCH(email,nombre,sexo,telefono,pais) AGAINST('$busqueda' IN BOOLEAN MODE)";
    include("tabla_resultados.php");
}

?>
