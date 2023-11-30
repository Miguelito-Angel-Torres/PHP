<?php
class Hexagono extends Poligonos{
    private $lados;
    private $apotema;
    public $lado = 6;
    public function __construct($lados,$apotema){
        $this->lados = $lados;
        $this->apotema = $apotema;
        
    }

    public function perimetro(){
        return ($this->lados* $this->lado);
    }
    public function area(){
        return (self::perimetro()*$this->apotema)/2;
    }
}