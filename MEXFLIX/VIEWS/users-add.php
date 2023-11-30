<?php if($_POST['r']=='users-add' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){?>
    <h2 class="p1">Agregar Usuario</h2>
    <form method="post"  class="item">
        <div class="p_25">
            <input type="text" name="user_" placeholder="usuario" required>
        </div>
        <div class="p_25">
            <input type="text" name="email" placeholder="email" required>
        </div>
        <div class="p_25">
            <input type="text" name="name_" placeholder="nombre" required>
        </div>
        <div class="p_25">
            <input type="date" name="birthday" placeholder="cumpleaños" required>
        </div>
        <div class="p_25">
            <input type="password" name="pass" placeholder="password" required>
        </div>
        <div class="p_25">
            <input type="radio" name="role_" id="admin"
            value="Admin" required><label for="admin">Administrador</label>
            <input type="radio" name="role_" id="noadmin"
            value="User" required><label for="noadmin">Usuario</label>
        </div>
        <div class="p_25">
            <input class="button add" type="submit" value="Agregar">
            <input type="hidden" name="r" value="users-add">
            <input type="hidden" name="crud" value="set">
        </div>
    </form>
    <?php } else if($_POST['r']=='users-add' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'set') {
            // Autoload puede agarrar cualquier clase que tengamos en la carpeta
            // de Modelo y Controladores sin necesidad adquiriendole cada archivo
            // que yo necesite
            $users_controller = new UsersController();
            $fecha = new DateTime($_POST['fecha']);
            $fecha = $fecha->format('Y/m/d');
            $new_users = array(
                'user_' => $_POST['user_'],
                'email' => $_POST['email'],
                'name_' => $_POST['name_'],
                'birthday' => $_POST['birthday'],
                'pass' => $_POST['pass'],
                'role_' => $_POST['role_'],
            ); 
            $users = $users_controller->set($new_users);

        ?>
            <div class="container">
                <p class="item  add">Users: <?php echo $_POST['user_']?> salvado</p>
                <p class="item  add">Users: <?php echo $fecha ?> salvado</p>
            </div>
            <?php header( "refresh:2;url=usuarios" ) ?>
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