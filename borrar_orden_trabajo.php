<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

$id = limpiarDatos($_GET['id']);

if(!$id) {

}

$statement = $conexion->prepare("DELETE FROM orden_trabajo WHERE id = :id");
$statement->execute(array(
    'id' => $id
));

header('Location: ' . RUTA . '/orden_trabajo_resultados.php');


?>