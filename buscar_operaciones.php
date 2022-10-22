<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare(
        "SELECT * FROM operaciones WHERE operaciones_fecha LIKE :busqueda or operaciones_orden_trabajo LIKE :busqueda or operaciones_nombre_pieza LIKE :busqueda or operaciones_nombre LIKE :busqueda or fecha_inicio_operacion LIKE :busqueda OR operaciones_nombre_empleado LIKE :busqueda"
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
    header('Location: ' . RUTA . '/operaciones_resultados.php');
}

require 'src/views/buscar_operaciones.view.php';

?>