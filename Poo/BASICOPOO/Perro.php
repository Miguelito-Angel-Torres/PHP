<?php
class Perro{
    //ATRIBUTOS:
    public $nombre;
    public $raza;
    public $edad;
    public $sexo;
    public $adiestrado;
    public $foto;
    public $comida;
    private $pulgas;
    public static $mejor_amigo = 'Hombre';
    public $alone;
    const MEJOR_CUALIDAD = 'Fidelidad';
    //METODOS MAGICOS:
    //CONSTRUCTOR: Metodo que se ejecuta automaticamente al inicio de la instanciar la clase
    public function __construct($nombre,$raza,$edad,$sexo,$adiestrado,$foto,$pulgas){
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->edad = $edad . ' años';
        $this->sexo = ($sexo)?'Macho':'Hembra';
        $this->adiestrado =  ($adiestrado)?'Adiestrado':'No Adiestrado';
        $this->foto = $foto;
        $this->pulgas = $pulgas;
        $this->alone ="Atributos sin parametro";
        echo '<mark>Ejecucion Automatico</mark><br/>';
    }
    //DESTRUCTOR: Metodo que se ejecuta automaticamente al final de instanciar la clase 
    public function __destruct(){
        echo '<mark>Ejecucion Automatico Final Destructor</mark><br/>';
    }
    //METODOS:
    public function ladrar(){
        echo '<p><mark>GUAU!!!</mark></p>';
    }
    public function comer($c){
        $this->comida = $c;
        echo '<p>'.$this->nombre.' come '.$this->comida.'</p>';
        
    }
    public function aparecer(){
        echo '<img src="'.$this->foto.'">'."</br>";   
    }
    // Exponer esta propiedad o metodo privado desde un public:
    public function tiene_Pulgas(){
        echo ($this->pulgas)?'<p>Tiene Pulgas</p>':'<p>No Tiene Pulgas</p>';
    }
    public function mas_info(){
        //Cuando Deseo Repetir el metodo comer y ladrar, self: de ti misma clase ejecuta el metodo
        self::ladrar();
        //Otra forma mediante la clase:
        Perro::comer('Tortilla');
        self::comer('Comida');
        // Dos forma para llamar atributo static
        //echo Perro::$raza;
        //echo self::$raza;
        echo '<p>'.Perro::$mejor_amigo.'</p>';
        echo self::MEJOR_CUALIDAD.'</p>';
    }
}
$mancha = new Perro('Manchas','Dalmata',5,true,true,'https://t1.ea.ltmcdn.com/es/posts/0/2/5/2_spaniel_breton_24520_1_600.jpg',false);
//var_dump($mancha);
echo $mancha->nombre.'</br>';
//echo $mancha->raza."</br>";
echo $mancha->sexo."</br>";
echo $mancha->adiestrado."</br>";
$mancha->ladrar();
$mancha->comer('Comida');
$mancha->aparecer();
/* Atributo y Metodo Privado no se puede ejecutar desde afuera: echo $mancha->pulgas; Solamente dentro de la clase*/
$mancha->tiene_Pulgas();
$mancha->mas_info();
echo Perro::$mejor_amigo."</br>";
//https://www.youtube.com/watch?v=hxgT8PfNUnU&list=PLvq-jIkSeTUZEHvKw7Gx3g5CjlcvA3jr1&index=7