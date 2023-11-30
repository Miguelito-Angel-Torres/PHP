<?php
class Cuadrado extends Poligonos{
    private $lados;
    
    public function __construct($lados){
        $this->lado = 4;
        $this->lados = $lados;
    }

    public function perimetro(){
        return $this->lado*$this->lados;
    }
    public function area(){
        return pow($this->lados,2);
    }

    
}