<?php $status_controller = new MovieSeriesController(); ?>
<?php if($_POST['r']=='movieserie-edit' && $_SESSION['role_'] == 'Admin' && !isset($_POST['crud'])){
    $status = $status_controller->get($_POST['status_id']);
    var_dump($status);
    if(empty($status)){?>
        <div class="container">
            <p class="item error">NO existe el MovieSerie <?php $_POST['status_id'] ?></p>
        </div>
        <?php header( "refresh:2;url=movieserie" ) ?>
    <?php  
    }else{
        
        $status_controller = new StatusController();
		$status1 = $status_controller->get();
		$status_select = '';

		for ($n=0; $n < count($status); $n++) { 
			$selected = ($status[0]['statu'] == $status1[$n]['statu']) ? 'selected' : '';
			$status_select .= '<option value="' . $status1[$n]['status_id'] . '"' . $selected . '>' . $status1[$n]['statu'] . '</option>';
		}

    
        echo $status_select;
        
        ?> 
        <h2 class="p1">Actualizar Moviseries</h2>
            <form method="post" class="item">
                <div class="p_25">
                    <input type="text" name="imdb_id" placeholder="imdb_id" value=<?php echo $status[0]['imdb_id']?>  required >
                    <input type="text" name="title" placeholder="title" value=<?php echo $status[0]['title']?>  required>
                    <textarea name="plot" id="" cols="22" rows="10" value=<?php echo $status[0]['plot']?>  placeholder="descripcion"></textarea>
                    <input type="text" name="author" placeholder="author" value=<?php echo $status[0]['author']?> required>
                    <input type="text" name="actors" placeholder="actors" value=<?php echo $status[0]['actors']?> required>
                    <input type="text" name="country" placeholder="country" value=<?php echo $status[0]['country']?> required>
                    <input type="text" name="premiere" placeholder="premiere" value=<?php echo $status[0]['premiere']?> required>
                    <input type="url" name="poster" placeholder="poster" value=<?php echo $status[0]['poster']?> required>
                    <input type="url" name="trailer" placeholder="trailer" value=<?php echo $status[0]['trailer']?> required>
                    <input type="number" name="rating" placeholder="rating" value=<?php echo $status[0]['rating']?> required>
                    <select name="status" id="">
                        <option value="">status</option>
                        <?php echo $status_select ?>
                    </select>
                    <input type="radio" name="category" id="movie" value="Movie" <?php if($users[0]['category'] == "Movie"){echo 'checked';} ?>  required>
                    <label for="movie">Movie</label>
                    <input type="radio" name="category" id="serie" value="Serie" <?php if($users[0]['category'] == "Serie"){echo 'checked';} ?> required>
                    <label for="serie">Serie</label>
                        
                    </div>
                    <div class="p_25">
                        <input type="text" name="statu" placeholder="status"
                            value=<?php echo $status[0]['statu']?> required/>
                        <input class="button edit" type="submit" value="Editar" />
                        <input type="hidden" name="r" value="movieserie-edit"/>
                        <input type="hidden" name="crud" value="set"/>

                    </div>
            </form>
    
    <?php  }?>
    
    
    
    
<?php } else if($_POST['r']=='movieserie-edit' && $_SESSION['role_']== 'Admin' && $_POST['crud'] == 'set' ) {
            
            $numero = intval($_POST['status_id']);
            $new_status = array(
                'imdb_id' =>  $_POST['imdb_id'],
                'title' =>  $_POST['title'], 
                'plot' =>  $_POST['plot'], 
                'author' =>  $_POST['author'],
                'actors' =>  $_POST['actors'],
                'country' =>  $_POST['country'],
                'premiere' =>  $_POST['premiere'],
                'poster' =>  $_POST['poster'],
                'trailer' =>  $_POST['trailer'],
                'rating' =>  $_POST['rating'],
                'genres' =>  $_POST['genres'],
                'status' =>  $_POST['statu'],
                'category' =>  $_POST['category']
            );     
            $status = $status_controller->set($new_status);

        ?>
            <div class="container">
                <p class="item  add">Status: <?php echo $_POST['title']?> actualizadosalvado</p>
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