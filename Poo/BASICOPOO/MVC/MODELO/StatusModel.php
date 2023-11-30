<?php
// Modelo que hace referencia a la tabla Status
require_once('Model.php');

class StatusModel extends Model{
    // Son variables correspondiente a cada uno de los campos de la tabla
    public $status_id;
    public $status;

    public function __construct(){
        // Eso indica que los dos van obtener el valor;
        $this->db_name = 'mexflix';
    }

    //Metodo Astract:
    public function create($status_data = array()) {
        //var_dump($status_data);
        foreach ($status_data as $key => $value) {
            //Variables Variables
            // segunda $: de esa posicion conviertelo en una variable dinamica
            $$key = $value;
            //var_dump($value);
            //var_dump($key);
        }
        $this->query = "INSERT INTO statu (status_id,statu) VALUES (
            $status_id,
            '$statu'
        )";
        $this->set_query();
    }

    public function read($status_id = ''){
        $this->query = ($status_id != '')
        ?"SELECT * FROM statu WHERE status_id = $status_id"
        :"SELECT * FROM statu";
        $this->get_query();
        //var_dump($this->get_query());
        //var_dump($this->rows);
        //return $this->rows;
        $num_rows = count($this->rows);
        $data = array();
        foreach ($this->rows as $key => $value) {
            //array_push():Agrega al final del arreglo una nueva posicion
            array_push($data,$value);
            //$data[$key] = $value;
        }
        return $data;
    }

    public function update($status_data = array()){
        foreach ($status_data as $key => $value) {
            $$key = $value;   
        }
        $this->query = "UPDATE statu SET statu = '$statu' WHERE status_id = $status_id";
        $this->set_query();

    }

    public function delete($statu_id = ''){
        $this->query = ($statu_id != '')
        ?"DELETE FROM statu WHERE status_id = $statu_id"
        : null;
        $this->set_query();
    }

    public function __destruct(){
       //unset($this);
    }   
}
