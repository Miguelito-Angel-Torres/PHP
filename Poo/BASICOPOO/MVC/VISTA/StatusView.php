<?php
// Puro codigo HTML que vamos a generar dinamica con php
require ('../CONTROLLER/StatusController.php');

echo '<h1>CRUD con MVC de la Tabla Status</h1>';
$status = new StatusController();
$status_data = $status->read();
var_dump($status_data);

$num_status = count($status_data);

echo "<h2>${num_status}</h2>";

echo '<table class="">
            <tr>
                <th>Status_id</th>
                <th>Status</th>
            </tr>';
            for ($i=0; $i < $num_status; $i++) { 
                echo ' <tr>
                <td>'.$status_data[$i]['status_id'].'</td>
                <td>'.$status_data[$i]["statu"].'</td>
                </tr>';
            }
        
echo        '</table>';

echo '<h2>Insertando Status</h2>';
$new_status = array(
    'status_id' => 0,
    'statu'=> 'Maria Status'

);
$status->create($new_status);

echo '<h2>Actualizando Status</h2>';
$update_status = array(
    'status_id' => 8,
    'statu'=> 'Marias Status'
);

//$status->update($update_status);


echo '<h2>Eliminando Status</h2>';

//$status->delete(6);