<?php
// Sirve como Controlador del Modelo de Status
// Gestionar las peticiones entre la vista y el modelo.
//Controlar toda la logica de negocio (Comunicacion Entre la Vista y Modelo)
// Se encarga de recibir las peticiones tanto el modelo , como la vista
require ('../MODELO/StatusModel.php');

class StatusController{
    //El recurso privado es el que va invocar
    // o va inicializar nuestro clase StatusModel
    private $model;

    public function __construct(){
        //Instanciar un Objeto de la clase StatuModel()
        $this->model = new StatusModel();
    }
    //Metodo: Replicar los metodos del Modelo
    //Debe que cumplir con los mismo parametros que recibe el modelo
    public function create($status_data = array()) {
        return $this->model->create($status_data);
    }
    public function read($status_id = ''){
        //return acabo de ejecucion
        return $this->model->read($status_id);
    }
    public function update($status_data = array()){
        return $this->model->update($status_data);
    }
    public function delete($statu_id = ''){
        return $this->model->delete($statu_id);
    }

    public function __destruct(){

    }
}