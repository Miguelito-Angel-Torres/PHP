<?php 
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
// De la nada sale error:
if(empty($_GET["pais_slc"])){
    include "../conexion.php";
}

include "../funciones.php";

$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;
if($num_regs ==0){
    echo "<br/><span class='mensajes'>No se encontraron
    registros con esta busqueda </span><br/>";
}else{
    ?>
        <br/>
        <table>
            <thead>
                <tr>
                     <th>email</th>
                     <th>nombre</th>
                     <th>sexo</th>
                     <th>nacimiento</th>
                     <th>telefono</th>
                     <th>pais</th>
                     <th>imagen</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($registro = $ejecutar_consulta->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $registro["email"] ?></td>
                        <td><?php echo $registro["nombre"] ?></td>
                        <td><?php echo ($registro["sexo"]== "M")?"Masculino":"Femenino";?></td>
                        <td><?php echo $registro["nacimiento"] ?></td>
                        <td><?php echo $registro["telefono"] ?></td>
                        <td><?php echo $registro["pais"] ?></td>
                        <td><img src=".../IMG/FOTOS/<?php echo $registro["imagen"] ?>"/></td>
                    </tr>    
                    
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
}
?>