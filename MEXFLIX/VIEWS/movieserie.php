<h2 class="p1">GESTION DE movieseries</h2>
<?php 
$status_controller = new MovieSeriesModel();
$status = $status_controller->get();
?>
<?php 
    if(empty($status)){?>
        <div class="container">
            <p class="item error">
                No hay MovieSeries
            </p>
        </div>
    
    <?php }else{ ?>
        <div class=" item ">
            <table>
                <tr>
                    <th>ID</th>
                    <th>TITULO</th>
                    <th>ESTRENO</th>
                    <th>GENEROS</th>
                    <th>STATUS</th>
                    <th>CATEGORIA</th>
                    <th colspan="3">
                        <form method="POST">
                            <input type="hidden" name="r" value="movieserie-add">
                            <input class="button add" type="submit" value="Agregar">
                        </form>
                    </th>
                </tr>
                <?php for ($i=0; $i < count($status) ; $i++) { ?>
                    <tr>
                        <th><?php echo $status[$i]["imdb_id"] ?></th>
                        <th><?php echo $status[$i]["title"] ?></th>
                        <th><?php echo $status[$i]["premiere"] ?></th>
                        <th><?php echo $status[$i]["genres"] ?></th>
                        <th><?php echo $status[$i]["statu"] ?></th>
                        <th><?php echo $status[$i]["category"] ?></th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="movieserie-edit">
                                <input type="hidden" name="status_id" value=<?php echo $status[$i]["imdb_id"]  ?>>
                                <input class="button edit" type="submit" value="Editar">
                            </form>
                        </th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="movieserie-delete">
                                <input type="hidden" name="imdb_id" value=<?php echo $status[$i]["imdb_id"] ?>>
                                <input class="button delete" type="submit" value="Eliminar">
                            </form>
                        </th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="movieserie-show">
                                <input type="hidden" name="status_id" value=<?php echo $status[$i]["imdb_id"] ?>>
                                <input class="button show" type="submit" value="Mostrar">
                            </form>
                        </th>
                    </tr>
                <?php } ?>

                
            </table>
        </div>
    <?php }?>