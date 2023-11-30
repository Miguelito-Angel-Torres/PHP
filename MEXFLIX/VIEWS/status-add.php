<?php if($_POST['r']=='status-add' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){?>
    <h2 class="p1">Agregar Status</h2>
    <form method="post"  class="item">
        <div class="p_25">
            <input type="text" name="status" placeholder="status" required>
        </div>
        <div class="p_25">
            <input class="button add" type="submit" value="Agregar">
            <input type="hidden" name="r" value="status-add">
            <input type="hidden" name="crud" value="set">
        </div>
    </form>
    <?php } else if($_POST['r']=='status-add' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'set') {
            // Autoload puede agarrar cualquier clase que tengamos en la carpeta
            // de Modelo y Controladores sin necesidad adquiriendole cada archivo
            // que yo necesite
            $status_controller = new StatusController();
            $new_status = array(
                'status_id' => 0,
                'statu' => $_POST['status']
            ); 
            $status = $status_controller->set($new_status);

        ?>
            <div class="container">
                <p class="item  add">Status: <?php echo $_POST['status']?> salvado</p>
            </div>
            <?php header( "refresh:2;url=status" ) ?>
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