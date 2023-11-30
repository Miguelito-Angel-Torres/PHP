<?php
class StatusModel extends Models{
    //Metodo Astract:
    public function set($status_data = array()) {
        foreach ($status_data as $key => $value) {
            $$key = $value;
        }
        $this->query = "REPLACE INTO statu (status_id,statu) VALUES (
            $status_id,
            '$statu')";
        $this->set_query();}

    public function get($status_id = ''){
        $this->query = ($status_id != '')
        ?"SELECT * FROM statu WHERE status_id = $status_id"
        :"SELECT * FROM statu";
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
        ?"DELETE FROM statu WHERE status_id = $statu_id"
        : null;
        $this->set_query();
    }

    public function __destruct(){
       //unset($this);
    }   
}
