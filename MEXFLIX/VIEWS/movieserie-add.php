<?php if($_POST['r']=='movieserie-add' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){
    
    $status_controller = new StatusController();
    $status = $status_controller->get();
    $status_select = '';

    for ($i=0; $i < count($status); $i++) { 
        $status_select .= '<option value="'.$status[$i]["status_id"].'">'.$status[$i]["statu"].'</option>';
    }

    echo $status_select;
    ?>
    
    
    
    
    <h2 class="p1">Agregar Movi</h2>
    <form method="post"  class="item">
        <div class="p_25">
            <input type="text" name="imdb_id" placeholder="imdb_id" required>
            <input type="text" name="title" placeholder="title" required>
            <textarea name="plot" id="" cols="22" rows="10" placeholder="descripcion"></textarea>
            <input type="text" name="author" placeholder="author" required>
            <input type="text" name="actors" placeholder="actors" required>
            <input type="text" name="country" placeholder="country" required>
            <input type="text" name="premiere" placeholder="premiere" required>
            <input type="url" name="poster" placeholder="poster" required>
            <input type="url" name="trailer" placeholder="trailer" required>
            <input type="number" name="rating" placeholder="rating" required>
            <select name="status" id="">
                <option value="">status</option>
                <?php echo $status_select ?>
            </select>
            <input type="radio" name="category" id="movie" value="Movie" required>
            <label for="movie">Movie</label>
            <input type="radio" name="category" id="serie" value="Serie" required>
            <label for="serie">Serie</label>
        </div>
        <div class="p_25">
            <input class="button add" type="submit" value="Agregar">
            <input type="hidden" name="r" value="movieserie-add">
            <input type="hidden" name="crud" value="set">
        </div>
    </form>
    <?php } else if($_POST['r']=='status-add' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'set') {
            // Autoload puede agarrar cualquier clase que tengamos en la carpeta
            // de Modelo y Controladores sin necesidad adquiriendole cada archivo
            // que yo necesite
            $status_controller = new MovieSeriesModel();
            $new_status = array(
                'imdb_id' => $_POST['imdb_id'],
                'title' => $_POST['title'],
                'plot' => $_POST['plot'],
                'author' => $_POST['author'],
                'actors' => $_POST['actors'],
                'country' => $_POST['country'],
                'premiere' => $_POST['premiere'],
                'poster' => $_POST['poster'],
                'trailer' => $_POST['trailer'],
                'rating' => $_POST['rating'],
                'genres' => $_POST['genres'],
                'mose_statu' => $_POST['status'],
                'category' => $_POST['category'],

            ); 

            $status = $status_controller->set($new_status);
            echo $status;

        ?>
            <div class="container">
                <p class="item  add">Status: <?php echo $_POST['imdb_id']?> salvado</p>
            </div>
            <?php // header( "refresh:2;url=movieserie" ) ?>
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