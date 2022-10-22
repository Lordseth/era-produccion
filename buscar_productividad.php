<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare(
        "SELECT * FROM productividad WHERE productividad_fecha LIKE :busqueda or productividad_orden_trabajo LIKE :busqueda or productividad_nombre_pieza LIKE :busqueda or productividad_operacion_nombre LIKE :busqueda or eficiencia_operador LIKE :busqueda or productividad_nombre_empleado LIKE :busqueda" 
    );

    $statement->execute(array(
        ':busqueda' => "%$busqueda%"
    ));

    $resultados = $statement->fetchAll();

    if(empty($resultados)) {
        $nombre = 'No se encontraron articulos con el resultado: ' . $busqueda;
    } else {
        $nombre = 'Resultados de la busqueda: ' . $busqueda;
    }

} else {
    header('Location: ' . RUTA . '/productividad_resultados.php');
}

require 'src/views/buscar_productividad.view.php';

?>