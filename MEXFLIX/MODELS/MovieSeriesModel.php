<?php
class MovieSeriesModel extends Models{
    //Metodo Astract:
    public function set($status_data = array()) {
        foreach ($status_data as $key => $value) {
            $$key = $value;
        }
        $plot = str_replace("'","\'",$plot);

        $this->query = "REPLACE INTO movieseries SET imdb_id = '$imdb_id',title='$title',
        plot='$plot',author='$author',actors='$actors',country='$country',premiere='$premiere',
        trailer='$trailer',poster='$poster',rating=$rating,genres='$genres',mose_statu=$mose_statu,
        category = '$category'
         ";
        $this->set_query();
    }

    public function get($status_id = ''){
        $this->query = ($status_id != '')
        ?"SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
        ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.statu 
        FROM movieseries ms join statu s
        ON (ms.mose_statu = s.status_id) WHERE ms.imdb_id = '$status_id'"
        :"SELECT ms.imdb_id,ms.title,ms.plot,ms.author,ms.actors,ms.country,ms.premiere,
        ms.poster,ms.trailer,ms.rating,ms.genres,ms.category,s.statu 
        FROM movieseries ms join statu s
        ON (ms.mose_statu = s.status_id)";
        $this->get_query();
        $num_rows = count($this->rows);
        $data = array();
        foreach ($this->rows as $key => $value) {
            //array_push():Agrega al final del arreglo una nueva posicion
            array_push($data,$value);
            //$data[$key] = $value;
        }
        return $data;
    }

    public function del($statu_id = ''){
        $this->query = ($statu_id != '')
        ?"DELETE FROM movieseries WHERE imdb_id = $statu_id"
        : null;
        $this->set_query();
    }

    public function __destruct(){
       //unset($this);
    }   
}
