<h2 class="p1">GESTION DE USUARIO</h2>
<?php 
$users_controller = new UsersController();
$users = $users_controller->get();
?>
<?php 
    if(empty($users)){?>
        <div class="container">
            <p class="item error">
                No hay Usuario
            </p>
        </div>
    
    <?php }else{ ?>
        <div class=" item ">
            <table>
                <tr>
                    <th>USUARIO</th>
                    <th>CORREO</th>
                    <th>NOMBRE</th>
                    <th>CUMPLEAÑO</th>
                    <th>PASSWORD</th>
                    <th>ROL</th>
                    <th colspan="2">
                        <form method="POST">
                            <input type="hidden" name="r" value="users-add">
                            <input class="button add" type="submit" value="Agregar">
                        </form>
                    </th>
                </tr>
                <?php for ($i=0; $i < count($users) ; $i++) { ?>
                    <tr>
                        <th><?php echo $users[$i]["user_"] ?></th>
                        <th><?php echo $users[$i]["email"] ?></th>
                        <th><?php echo $users[$i]["name_"] ?></th>
                        <th><?php echo $users[$i]["birthday"] ?></th>
                        <th><?php echo $users[$i]["pass"] ?></th>
                        <th><?php echo $users[$i]["role_"] ?></th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="users-edit">
                                <input type="hidden" name="user" value=<?php echo $users[$i]["user_"]  ?>>
                                <input class="button edit" type="submit" value="Editar">
                            </form>
                        </th>
                        <th>
                            <form method="POST">
                                <input type="hidden" name="r" value="users-delete">
                                <input type="hidden" name="user" value=<?php echo $users[$i]["user_"] ?>>
                                <input class="button delete" type="submit" value="Eliminar">
                            </form>
                        </th>
                    </tr>
                <?php } ?>

                
            </table>
        </div>
    <?php }?>