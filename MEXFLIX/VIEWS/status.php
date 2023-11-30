<h2 class="p1">GESTION DE STATUS</h2>
<?php 
$status_controller = new StatusController();
$status = $status_controller->get();
?>
<?php 
    if(empty($status)){?>
        <div class="container">
            <p class="item error">
                No hay Status
            </p>
        </div>
    
    <?php }else{ ?>
        <div class=" item ">
            <table>
                <tr>
                    <th>ID</th>
                    <th>STATUS</th>
                    <th colspan="2">
                        <form method="POST">
                            <input type="hidden" name="r" value="status-add">
                            <input class="button add" type="submit" value="Agregar">
                        </form>
                    </th>
                </tr>
                <?php for ($i=0; $i < count($status) ; $i++) { ?>
                    <tr>
                        <th><?php echo $status[$i]["status_id"] ?></th>
                        <th><?php echo $status[$i]["statu"] ?></th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="status-edit">
                                <input type="hidden" name="status_id" value=<?php echo $status[$i]["status_id"]  ?>>
                                <input class="button edit" type="submit" value="Editar">
                            </form>
                        </th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="status-delete">
                                <input type="hidden" name="status_id" value=<?php echo $status[$i]["status_id"] ?>>
                                <input class="button delete" type="submit" value="Eliminar">
                            </form>
                        </th>
                    </tr>
                <?php } ?>

                
            </table>
        </div>
    <?php }?>