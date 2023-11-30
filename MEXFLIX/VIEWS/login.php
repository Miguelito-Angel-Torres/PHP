<form class="item" method="post">
    <div class="p_25">
        <input type="text" name="user_" placeholder="usuario" required>
    </div>
    <div class="p_25">
        <input type="password" name="pass" placeholder="password" required>
    </div>
    <div class="p_25">
        <input type="submit" class="button" value="Enviar">
    </div>
    <!--Las validacion de formario con javascript 
     post y get es global
     Cuando lo enviar autmaticamente voy a crear el arreglo global $_POST de user,pass,Enviar
    -->
   
</form>
<?php if(isset($_GET['error'])){?>
        <div class="container">
            <p class="item  error">
                <?php print $_GET['error']; ?>
            </p>
        </div>  
<?php }?>
   