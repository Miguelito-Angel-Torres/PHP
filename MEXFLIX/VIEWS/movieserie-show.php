<?php
if($_POST['r'] == 'movieserie-show' && isset($_POST['status_id'])){
    $ms_controller = new MovieSeriesModel();
    $ms = $ms_controller->get($_POST['status_id']);

    if(empty($ms)){?> 
        <div class="container">
            <p class="item error">Erorr al cargar MovieSeries <?php echo $_POST['status_id'] ?></p>
        </div>

    <?php
    }else{ 
        $template_ms = '
            <div class="item movieseris-info>
                <h2 class="p_5">%s</h2>
                <p class="p_5">%s</p>
                <p class="p_5">
                    <small>(%s)</small>
                    <small>%s</small>
                    <small>%s</small>
                    <small>%s</small>
                    <small>%s</small>
                    <small>%s</small>
                </p>
                <img class="p_5 poster" src="%s">
                <p>Autor: <b>%s<b/></p>
                <p>Actors: <b>%s<b/></p>
                <article>%s</article>
                <div>
                    <iframe src="%s" frameborder="0" allowfullscreen></iframe>

                </div>
                <input class="p_5 button add" type="button" value="Regresar"
                onclick="history.back()"   />
            </div>
        
        ';
        $trailer= str_replace('watch?v=', 'embed/', $ms[0]['trailer']);
        printf($template_ms,
            $ms[0]['title'],
            $ms[0]['genres'],
            $ms[0]['imdb_id'],
            $ms[0]['statu'],
            $ms[0]['category'],
            $ms[0]['country'],
            $ms[0]['premiere'],
            $ms[0]['rating'],
            $ms[0]['poster'],
            $ms[0]['author'],
            $ms[0]['actors'],
            $ms[0]['plot'],
            $trailer

    );
    
    }



    


}else{
    $controller = new ViewController();
    $controller->load_view('error404');
}?>