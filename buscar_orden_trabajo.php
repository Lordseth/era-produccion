<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare(
        "SELECT * FROM orden_trabajo WHERE cliente LIKE :busqueda or numero_orden LIKE :busqueda or numero_parte LIKE :busqueda or numero_dibujo LIKE :busqueda or nombre_pieza LIKE :busqueda"
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
    header('Location: ' . RUTA . '/orden_trabajo_resultados.php');
}

require 'src/views/buscar_orden_trabajo.view.php';

?>