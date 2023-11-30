<?php
// Model una clase astracta,se va crear la conexion y las consultas
// hacia la base de datos.
// Algo que no sabia:Tambien la hija puede pasar valores de variable a la clase padre

abstract class Model{
    //Atributos 
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = "";
    //Una opcion: private static $db_name = 'mexflix';
    //protected $db_name : Conexion a diferentes base de datos
    protected $db_name;
    private static $db_charset = 'utf8';
    //Variable que voy a guardar la conexion
    private $conn;
    protected $query;
    protected $rows = array();
    
    //Metodos
    //Metodos abstractos para CRUD de clases que hereden
    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();

    //Metodo privado para conectarse a la base de datos
    private function db_open(){
        // http://php.net/manual/es/class.mysqli.php
        $this->conn = new mysqli(
            self::$db_host,
            self::$db_user,
            self::$db_pass,
            $this->db_name
        );
        // charset() : que va permitir establecer el juego caracteres que
        // yo quiera definire a mi base de datos
        $this->conn->set_charset(self::$db_charset);    
    }
    //Metodo privado para desconectarse a la base de datos
    private function db_close(){
        $this->conn->close();
    }

    //Establecer un query que afecte datos(INSERT,DELETE,UPDATE)
    protected function set_query(){
        $this->db_open();
        //http://php.net/manual/es/mysqli.query.php
        $this->conn->query($this->query);
        $this->db_close();
    }

    //Obtener resultados de un query(SELECT)
    // [] indica que la variable es un arreglo
    protected function get_query(){
        $this->db_open();
        $resultado = $this->conn->query($this->query);
        while($this->rows[] = $resultado->fetch_assoc());
        $resultado->close();
        $this->db_open();
        //Metodo array_pop : quita el ultimo elemento del array
        return array_pop($this->rows);
    }
}