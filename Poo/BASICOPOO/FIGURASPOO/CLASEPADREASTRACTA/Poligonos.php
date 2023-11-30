
<?php 
// Clase Astracta: Un modelo a Seguir
abstract class Poligonos{
    protected $lado;
     
    // Metodo astracto hace referencia:
    abstract protected function perimetro();

    abstract protected function area();

    // La clase abstract tambien puede tener un metodo con cuerpo ya definido; porque todos van tener este metodo:
    public function lado(){
        // get_called_class():Imprimir el nombre de la clase 
        return 'Un '. get_called_class().' tiene <mark>'.$this->lado.'</mark> lados';
    }
}
