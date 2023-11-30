<?php $status_controller = new StatusController(); ?>
<?php if($_POST['r']=='status-edit' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){
    $status = $status_controller->get($_POST['status_id']);
    if(empty($status)){?>
        <div class="container">
            <p class="item error">NO existe el status_id <?php $_POST['status_id'] ?></p>
        </div>
        <?php header( "refresh:2;url=status" ) ?>
    <?php  
    }else{?> 
        <h2 class="p1">Actualizar Status</h2>
            <form method="post" class="item">
                <div class="p_25">
                        <input type="text" placeholder="status_id" value=<?php echo $status[0]['status_id']?> disable required/>
                        <input type="hidden" name="status_id" value=<?php echo $status[0]['status_id']?>/>
                    </div>
                    <div class="p_25">
                        <input type="text" name="statu" placeholder="status"
                            value=<?php echo $status[0]['statu']?> required/>
                        <input class="button edit" type="submit" value="Editar" />
                        <input type="hidden" name="r" value="status-edit"/>
                        <input type="hidden" name="crud" value="set"/>

                    </div>
            </form>
    
    <?php  }?>
    
    
    
    
<?php } else if($_POST['r']=='status-edit' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'set' ) {
            
            $numero = intval($_POST['status_id']);
            $new_status = array(
                'status_id' => $numero,
                'statu' => $_POST['statu']
            );     
            $status = $status_controller->set($new_status);

        ?>
            <div class="container">
                <p class="item  add">Status: <?php echo $_POST['status_id']?> actualizadosalvado</p>
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