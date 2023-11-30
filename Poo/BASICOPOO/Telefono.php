    <?php
// El celular es la evolucion portable de un telefono,va guardar ciertas caracteristicas contra su asesor telefono
// El smarthphone una evolucion mas inteligente del Celular
//Celular accede los recurso de Telefono y SmarthPhone tambien podria tenerlo
class Telefono{
    public $marca;
    public $modelo;
    protected $alambrico = true; 
    protected $comunicacion;

    public function __construct($marca,$modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->comunicacion = ($this->alambrico)?'Alambrico':'Inalambrico';
    }

    public function Llamar(){
        return print('<p>Riing Riing!!!</p>');
    }    
    public function Obtener_Informacion(){
        return print('<ul>
            <li>Marca <b>'.$this->marca.'</b></li>
            <li>Modelo <b>'.$this->modelo.'</b></li>
            <li>Comunicacion <b>'.$this->comunicacion.'</b></li>
        </ul>');
    }
}
class Celular extends Telefono{
    //Obtener atributos de la clase padre
    // Puedo cambiar el valor de los atributos que obtengo del padre
    protected $alambrico = false;
    public function __construct($marca,$modelo){
        //Dentro del constructor: Voy a mandar a llamar a que se ejecute el metodo constructor de mi clase padre
        //Primero se ejecuta el constructor hija y de ahi el constructor padre.
        parent::__construct($marca,$modelo);
    }

    //Obtener metodo de la clase padre
}
// final cuando ya no puede ser heredada por alguien mas.
final class SmarthPhone extends Celular{
    public $alambrico = false;
    public $internet = true;
    
    public function __construct($marca,$modelo){
        parent::__construct($marca,$modelo);
    }
    // Poliformismo: Capacidad de poder modificar,que un metodo pudiera modifica dependiendo de la clase que se ejecute:
    public function Obtener_Informacion(){
        return print('<ul>
            <li>Marca <b>'.$this->marca.'</b></li>
            <li>Modelo <b>'.$this->modelo.'</b></li>
            <li>Comunicacion <b>'.$this->comunicacion.'</b></li>
            <li>Dispositivo con Acceso Internet <b>'.$this->internet.'</b></li>
        </ul>');
    }
}

echo '<h1>Evolucion de Telefono</h1>';
echo '<h2>Telefono:</h2>';
$tel_casa =  new Telefono('Panasonic','KX-TS550');
//var_dump($tel_casa);
$tel_casa->Llamar();
$tel_casa->Obtener_Informacion();

echo '<h2>Celular:</h2>';
$cel_casa = new Celular('Huawei','Alcatel');
//var_dump($cel_casa);
$c = $cel_casa->Llamar();
echo $c;
$cel_casa->Obtener_Informacion();

echo '<h2>SmarthPhone:</h2>';
$smarth_casa = new SmarthPhone('Phone','A3');
var_dump($smarth_casa);
$smarth_casa->Llamar();
$smarth_casa->Obtener_Informacion();
