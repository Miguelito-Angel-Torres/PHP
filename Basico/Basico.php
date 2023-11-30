<?php 
$num1 = 1; $num2 = 2;$num3=99999.0000000;
echo $num1." ".$num2;
echo "<br/>";
$su = $num1 + $num2;
echo $su;echo"<br/>";echo "La variable $su tiene valor de $su"; echo "<br/>";   
$mo = $num2 % 2;
if($mo == 0){echo "Par";}else{echo "Impar";};echo "<br/>";
for($i=0;$i<=10;$i++){echo $i. "<br/>";};
// number_format: Cuanto decimal deseas, te agrega y te quita los decimales
echo number_format($num3,"2");
$boolean = false;  echo "<br/>";
switch($boolean){
    case false:
        echo "false";break;
    default:
        echo "True";break;}
for($i=19;$i>=0;$i--){echo $i. "<br/>";};
$num = 0;$num1 = 0;
while($num<=0){echo $num. "<br/>";$num++;};
do{
    echo "Do:". $num1."<br/>";
    $num1++;
}while($num1<=0);
$v = array("uno","dos");
var_dump(($v));
for($i=0;$i<count($v);$i++){echo $v[$i] . "<br/>";};
$v1 = array();
for($i=0;$i<2;$i++){
    $v1[$i] = "Mx";
    echo $v1[$i]."<br/>";};
"<br/>";
var_dump($v1);
$matriz =array();
for($i=0;$i<4;$i++){
            
    for($j=0;$j<4;$j++){
        $matriz[$i][$j]="Lucas".$i.$j;
        echo $matriz[$i][$j]." - ";    
    }
echo "<br>";}
for($x= 0 ; $x<sizeof($matriz);$x++){
    for ($l = 0 ;$l<sizeof($matriz[0]);$l++){
        echo $matriz[$x][$l] ." - ";
    }
    echo"<br>"; }
// Arreglo multidimensional(indice(de tipo String dentro de un Array) => valor):
$datos = [
    'nombre' => "Xml",
    'email' => "xml@gmail.com"];
var_dump($datos);
// Referencia al indice string (Util para recuperar informacion a la base de datos)
echo $datos['nombre']. "<br>";
$data = [
    [
        'nombre' => "XmlMa",
        'email' => "xml@gmail.com",
        'di' => ['Pais' =>"Peru",],
    ],
    [
        'nombre' => "Xml2",
        'email' => "xml2@gmail.com"
    ],   
];
var_dump($data);
echo $data[1]['nombre'];
echo $data[0]['di']['Pais'];
foreach($data as $item){
    echo $item["nombre"];
    echo "<hr/>";
}
// Foreach Permite ir iterando uno a uno los valores que tenga un array
// en la variable indice o key que almacenado el indice del elemento
$nom1  = ['X','Y'];
foreach($nom1 as $indice => $nom1x){
    echo $nom1x."indice :".$indice."<br/>";}
$ar = [1,2,3];
//Funcion List:
list($a,$b,$c) = $ar;
echo $a."<br/>";
/*range(inicio, fin) numeros*/
$array = range(10,20);
// var_dump() :Funcion para visualizar arrays
//var_dump($array);
// Verificar cuantos elementos tiene un array
echo count($array);
// Saber si un elemento se encuentra en el array (in_array).
if(in_array('X',$nom1)){echo 'Se encuentra';}
// Borrar un elemento del array:
unset($nom1[0]);
//https://www.youtube.com/watch?v=mDWVkbWUJ50&list=PL469D93BF3AE1F84F&index=9// Ejemplo11
?>