<?php $users_controller = new UsersController(); ?>
<?php if($_POST['r']=='users-edit' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){
    $users = $users_controller->get($_POST['user']);
    var_dump($users);
    echo $_POST['user'];
    if(empty($users)){?>
        <div class="container">
            <p class="item error">NO existe el usuario <?php $_POST['user'] ?></p>
        </div>
        <?php header( "refresh:15;url=usuario" ) ?>
    <?php  
    }else{
        $role_admin = ($users[0]['role_'] == "Admin") ? 'checked' :'';
        $role_users= ($users[0]['role_'] == "User") ? 'checked' :'';
        var_dump($users);
        
        echo $role_users;
        ?> 
        <h2 class="p1">Actualizar Usuario</h2>

        <form method="post" class="item">
            <div class="p_25">
            <input type="text" name="user_"  value=<?php echo $users [0]['user_']?>  />
            
            </div>
            <div class="p_25">
                <input type="text" name="email" placeholder="email" value=<?php echo $users [0]['email']?> required>
            </div>
            <div class="p_25">
                <input type="text" name="name_" placeholder="nombre" value=<?php echo $users [0]['name_']?> required>
            </div>
            <div class="p_25">
                <input type="text" name="birthday" placeholder="cumpleaños" value=<?php echo $users [0]['birthday']?> required>
            </div>
            <div class="p_25">
                <input type="password" name="pass" placeholder="password" value="" required>
            </div>
            <div class="p_25"> 
                <input type="radio" name="role_"  id="admin" <?php if($users[0]['role_'] == "Admin"){echo 'checked';} ?>
                value="Admin" required><label for="admin">Administrador</label>
                <input type="radio" name="role_" id="noadmin" <?php if($users[0]['role_'] == "User"){echo 'checked';}?>
                value="User" required><label for="noadmin">Usuario</label>
            </div>
            <div class="p_25">
                <input class="button add" type="submit" value="Editar">
                <input type="hidden" name="r" value="users-edit">
                <input type="hidden" name="crud" value="set">

            </div>
        </form>
    
    <?php  }?>
    
    
    
    
<?php } else if($_POST['r']=='users-edit' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'set' ) {
            
            echo $_POST['user_'],$_POST['email'],$_POST['name_'],$_POST['birthday'],$_POST['role_'];
            $new_status = array(
                'user_' => $_POST['user_'],
                'email' => $_POST['email'],
                'name_' => $_POST['name_'],
                'birthday' => $_POST['birthday'],
                'pass' => $_POST['pass'],
                'role_' => $_POST['role_'],
            );     
            $status = $users_controller->set($new_status);

        ?>
            <div class="container">
                <p class="item  add">Status: <?php echo $_POST['user_']?> actualizadosalvado</p>
            </div>
            <?php header( "refresh:15;url=usuario" ) ?>
            <!--Programar la insercion -->
            <!--<script>
                window.onload = function (){
                    reloadpage("status");
                    
                }

               function reloadpage(url){
                    setTimeout(function(){
                        window.location.href = url
                    },3000)
                    }    
            </script>-->
<?php }else{ 
            $controller = new ViewController();
            $controller->load_view('error401');
            
            ?>
            <!--Para generar una vista de no autorizado -->
            
        <?php }?>