<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

$id = limpiarDatos($_GET['id']);

if(!$id) {

}

$statement = $conexion->prepare("DELETE FROM productividad WHERE id = :id");
$statement->execute(array(
    'id' => $id
));

header('Location: ' . RUTA . '/productividad_resultados.php');


?>