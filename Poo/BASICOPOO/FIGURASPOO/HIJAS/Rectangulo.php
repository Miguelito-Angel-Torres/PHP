<?php
class Rectangulo extends Poligonos{
    private $altura;
    private $base;
    
    public function __construct($base,$altura){
        $this->lado = 4;
        $this->altura = $altura;
        $this->base = $base;
    }

    public function perimetro(){
        return ($this->base + $this->altura)*2;
    }
    public function area(){
        return $this->base*$this->altura;
    }
}