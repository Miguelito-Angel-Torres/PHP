<?php
abstract class Models{
    //Atributos 
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = "";
    private static $db_name = 'mexflix';
    private static $db_charset = 'utf8';
    private $conn;
    protected $query;
    protected $rows = array();
    
    abstract protected function set();
    abstract protected function get();
    abstract protected function del();

    //Metodo privado para conectarse a la base de datos
    private function db_open(){
        $this->conn = new mysqli(
            self::$db_host,
            self::$db_user,
            self::$db_pass,
            self::$db_name,
        );
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
    }}