<?php

class Triangulo extends Poligonos{
    private $lado_a;
    private $lado_b;
    private $lado_c;
    private $altura;

    public function __construct($lado_a, $lado_b, $lado_c, $altura){
        $this->lado = 3;
        $this->lado_a = $lado_a;
        $this->lado_b = $lado_b;
        $this->lado_c = $lado_c;
        $this->altura = $altura;
    }

    public function perimetro(){
        return $this->lado_a + $this->lado_b + $this->lado_c;
    }
    public function area(){
        return ($this->lado_b * $this->altura)/2;
    }

    
}