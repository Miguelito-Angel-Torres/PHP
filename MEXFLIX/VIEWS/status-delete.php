<?php $status_controller = new StatusController(); ?>
<?php if($_POST['r']=='status-delete' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){
    $status = $status_controller->get($_POST['status_id']);
    if(empty($status)){?>
        <div class="container">
            <p class="item error">NO existe el status_id <?php $_POST['status_id'] ?></p>
        </div>
        <?php header( "refresh:2;url=status" ) ?>
    <?php  
    }else{?> 
        <h2 class="p1">Agregar Status</h2>
        <h2 class="p1">Eliminar Status</h2>
                <form method="post" class="item">
                    <div class="p1 f2">
                        ¿Estas seguro de eliminar el Status:
                        <mark class="p1"><?php echo $status[0]['status_id']?></mark>?
                    </div>
                    <div>
                        <input class="button delete" type="submit" value ="SI"/>
                        <input class="button add " type="button" value = "NO"
                        onclick="history.back()" />
                        <input type="hidden" name="status_id" value=<?php echo $status[0]['status_id']?>/>
                        <input type="hidden" name="r" value="status-delete">
                        <input type="hidden" name="crud" value="del">
                        
                    </div>
                </form>
    
    <?php  }?>
    
    
    
    
<?php } else if($_POST['r']=='status-delete' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'del' ) {
            // Autoload puede agarrar cualquier clase que tengamos en la carpeta
            // de Modelo y Controladores sin necesidad adquiriendole cada archivo
            // que yo necesite
            $numero = intval($_POST['status_id']);
            $status_controller->del($numero);

        ?>
            <div class="container">
                <p class="item  add">Status: <?php echo $_POST['status_id']?> salvado</p>
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