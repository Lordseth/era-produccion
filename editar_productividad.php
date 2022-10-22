<?php

require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productividad_fecha = $_POST['productividad_fecha'];
    $productividad_orden_trabajo = $_POST['productividad_orden_trabajo'];
    $productividad_nombre_pieza = $_POST['productividad_nombre_pieza'];
    $productividad_operacion_nombre = $_POST['productividad_operacion_nombre'];
    $productividad_nombre_empleado = $_POST['productividad_nombre_empleado'];
    $tiempo_real = ($_POST['tiempo_real']);
    $tiempo_disponible = ($_POST['tiempo_disponible']);
    $unidades_producidas = ($_POST['unidades_producidas']);
    $unidades_estimadas = ($_POST['unidades_estimadas']);
    $eficiencia_operador = ($_POST['eficiencia_operador']);
    $productividad_total = ($_POST['productividad_total']);
    $productividad_comentarios = ($_POST['productividad_comentarios']);
    $id = $_POST['id'];
    
    $statement = $conexion->prepare('UPDATE productividad SET productividad_fecha = :productividad_fecha, productividad_orden_trabajo = :productividad_orden_trabajo, productividad_nombre_pieza = :productividad_nombre_pieza, productividad_operacion_nombre = :productividad_operacion_nombre, productividad_nombre_empleado = :productividad_nombre_empleado, tiempo_real = :tiempo_real, tiempo_disponible = :tiempo_disponible, unidades_producidas = :unidades_producidas, unidades_estimadas = :unidades_estimadas, eficiencia_operador = :eficiencia_operador, productividad_total = :productividad_total, productividad_comentarios = :productividad_comentarios WHERE id = :id' );
    
    $statement->execute(array(
        ':productividad_fecha' => $productividad_fecha,
        ':productividad_orden_trabajo' => $productividad_orden_trabajo,
        ':productividad_nombre_pieza' => $productividad_nombre_pieza,
        ':productividad_operacion_nombre' => $productividad_operacion_nombre,
        ':productividad_nombre_empleado' => $productividad_nombre_empleado,
        ':tiempo_real' => $tiempo_real,
        ':tiempo_disponible' => $tiempo_disponible,
        ':unidades_producidas' => $unidades_producidas,
        ':unidades_estimadas' => $unidades_estimadas,
        ':eficiencia_operador' => $eficiencia_operador,
        ':productividad_total' => $productividad_total,
        ':productividad_comentarios' => $productividad_comentarios,
        ':id' => $id
    ));

    header('Location: ' . RUTA . '/productividad_resultados.php');

} else {
    $id_productividad = id_item($_GET['id']); 

    if(empty($id_productividad)) {
        header('Location: ' .RUTA . '/productividad_resultados.php');
    }

    $dato = obtener_resultados_productividad_por_id($conexion, $id_productividad);

    if(!$dato) {
        header('Location: ' . RUTA . '/productividad_resultados.php');
    }

    $dato = $dato[0];
    
}


require 'src/views/editar_productividad.view.php';

?>