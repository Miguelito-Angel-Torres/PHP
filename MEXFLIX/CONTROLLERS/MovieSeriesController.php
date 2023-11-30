<?php
//require ('../MODELS/StatusModel.php');
class MovieSeriesController{
    private $model;

    public function __construct(){
        $this->model = new MovieSeriesModel();
    }
    //Metodo: Replicar los metodos del Modelo
    public function set($status_data = array()) {
        return $this->model->set($status_data);
    }
    public function get($status_id = ''){
        return $this->model->get($status_id);
    }
    public function del($statu_id = ''){
        return $this->model->del($statu_id);
    }

    public function __destruct(){

    }
}