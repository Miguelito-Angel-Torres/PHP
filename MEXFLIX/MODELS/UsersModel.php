<?php
class UsersModel extends Models{
    //Metodo Astract:
    public function set($user_data = array()) {
        foreach ($user_data as $key => $value) {
            $$key = $value;
        }
        $this->query = "REPLACE INTO users (user_ ,email,name_,birthday,pass,role_)
        VALUES (
            '$user_',
            '$email',
            '$name_'
            '$birthday',
            MD5('$pass'),
            '$role_')";
        $this->set_query();}


    public function get($user = ''){
        $this->query = ($user != '')
        ?"SELECT * FROM users WHERE user_ = '$user'"
        :"SELECT * FROM users";
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

    public function del($user = ''){
        $this->query = ($user != '')
        ?"DELETE FROM users WHERE user_ = '$user'"
        : null;
        $this->set_query();
    }

    public function validate_user($user,$pass){
        $this->query = "SELECT * FROM users WHERE user_ = '$user' and pass = MD5('$pass')";
        $this->get_query();
        $data = array();
        foreach ($this->rows as $key => $value) {
            //array_push():Agrega al final del arreglo una nueva posicion
            array_push($data,$value);
            //$data[$key] = $value;
        }
        return $data;

    }



    public function __destruct(){
       //unset($this);
    }   
}
