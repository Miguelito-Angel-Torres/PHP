<?php

class Autoload{
    public function __construct(){
        // spl_autoload_register() y recibe como parametro una funcion anomima
        spl_autoload_register(function ($class_name){
            // tengo que decirle donde esta las rutas para poder acceder
            // diferentes models y controladores
            $models_path = './MODELS/'.$class_name.'.php';
            $controllers_path = './CONTROLLERS/'.$class_name.'.php';
            
            if(file_exists($models_path)){
                require_once($models_path);
                echo "<p>$models_path</p>";
            }
            
            if(file_exists($controllers_path)){
                require_once($controllers_path);
                echo "<p>$controllers_path</p>";
            }   
            
        });
        
    }

    public function __destruct(){

    }
}