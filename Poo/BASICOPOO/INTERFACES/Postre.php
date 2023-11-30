<?php 
interface Ingredientes{
    //No se puede declarar atributos;
    public function establecer_ingredientes($lista);
    public function obtener_ingredientes();

}
interface Receta{
    public function establecer_receta($pasos);
    public function obtener_receta();
}

class Postre implements Ingredientes,Receta{
    private $ingredientes;
    private $receta;

    //Tiene que implementar los 4 metodos por obligacion:
    public function establecer_ingredientes($lista){
        /* variable ingred por cada elemento de esa lista separada
        por comas,pues lo vamos a convertirlo esta variable en un
        arreglo */
        //explode() : Rompe una cadena y convierte varias posiciones de un arreglo ,debilitando un caracter. 
        $this->ingredientes = explode(',',$lista);
        //echo var_dump($this->ingredientes);
    }
    public function obtener_ingredientes(){
        $num_ingredientes = count($this->ingredientes);
        $html = '<ul>';
        for ($i=0;$i<$num_ingredientes;$i++){
            $html .='<li>'.$this->ingredientes[$i].'</li>';
        }
        $html .= '</ul>';
        return print ($html);
        
    }
    public function establecer_receta($pasos){
        $this->recetas = explode('|',$pasos);
        //echo var_dump($this->recetas);
    }
    public function obtener_receta(){
        $num_recetas = count($this->recetas);
        $html = '<ol>';
        for ($i=0;$i<$num_recetas;$i++){
            $html .='<li>'.$this->recetas[$i].'</li>';
        }
        $html .= '</ol>';
        return print ($html);
    }
}

echo '<h1>Postres</h1>';
$chocolate = new Postre();

echo '<h3>Ingredientes</h3>';

$chocolate->establecer_ingredientes('
    1 taza de harina,
    1 huevo,
    1/3 taza de leche
');
$chocolate->obtener_ingredientes();

echo '<h3>Receta</h3>';

$chocolate->establecer_receta('
    Mezclar|
    Calentar|
    Volter'
);
$chocolate->obtener_receta();
