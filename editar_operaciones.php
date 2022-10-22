<?php

require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operaciones_fecha = $_POST['operaciones_fecha'];
    $operaciones_orden_trabajo = $_POST['operaciones_orden_trabajo'];
    $operaciones_nombre_pieza = $_POST['operaciones_nombre_pieza'];
    $operaciones_nombre = $_POST['operaciones_nombre'];
    $operaciones_nombre_empleado = $_POST['operaciones_nombre_empleado'];
    $fecha_inicio_operacion = $_POST['fecha_inicio_operacion'];
    $tiempo_preparacion = $_POST['tiempo_preparacion'];
    $hora_inicio_operacion = $_POST['hora_inicio_operacion'];
    $fecha_fin_operacion = $_POST['fecha_fin_operacion'];
    $hora_fin_operacion = $_POST['hora_fin_operacion'];
    $operaciones_piezas_totales = $_POST['operaciones_piezas_totales'];
    $operaciones_piezas_defectuosas = $_POST['operaciones_piezas_defectuosas'];
    $tiempo_programa = $_POST['tiempo_programa'];
    $operaciones_comentarios = $_POST['operaciones_comentarios'];
    $id = $_POST['id'];
    
    $statement = $conexion->prepare('UPDATE operaciones SET operaciones_fecha = :operaciones_fecha, operaciones_orden_trabajo = :operaciones_orden_trabajo, operaciones_nombre_pieza = :operaciones_nombre_pieza, operaciones_nombre = :operaciones_nombre, operaciones_nombre_empleado = :operaciones_nombre_empleado, fecha_inicio_operacion = :fecha_inicio_operacion, tiempo_preparacion = :tiempo_preparacion, hora_inicio_operacion = :hora_inicio_operacion, fecha_fin_operacion = :fecha_fin_operacion, hora_fin_operacion = :hora_fin_operacion, operaciones_piezas_totales = :operaciones_piezas_totales, operaciones_piezas_defectuosas = :operaciones_piezas_defectuosas, tiempo_programa = :tiempo_programa, operaciones_comentarios = :operaciones_comentarios WHERE id = :id' );
    
    $statement->execute(array(
        ':operaciones_fecha' => $operaciones_fecha,
        ':operaciones_orden_trabajo' => $operaciones_orden_trabajo,
        ':operaciones_nombre_pieza' => $operaciones_nombre_pieza,
        ':operaciones_nombre' => $operaciones_nombre,
        ':operaciones_nombre_empleado' => $operaciones_nombre_empleado,
        ':fecha_inicio_operacion' => $fecha_inicio_operacion,
        ':tiempo_preparacion' => $tiempo_preparacion,
        ':hora_inicio_operacion' => $hora_inicio_operacion,
        ':fecha_fin_operacion' => $fecha_fin_operacion,
        ':hora_fin_operacion' => $hora_fin_operacion,
        ':operaciones_piezas_totales' => $operaciones_piezas_totales,
        ':operaciones_piezas_defectuosas' => $operaciones_piezas_defectuosas,
        ':tiempo_programa' => $tiempo_programa,
        ':operaciones_comentarios' => $operaciones_comentarios,
        ':id' => $id
    ));

    header('Location: ' . RUTA . '/operaciones_resultados.php');

} else {
    $id_operaciones = id_item($_GET['id']); 

    if(empty($id_operaciones)) {
        header('Location: ' .RUTA . '/operaciones_resultados.php');
    }

    $dato = obtener_resultados_operaciones_por_id($conexion, $id_operaciones);

    if(!$dato) {
        header('Location: ' . RUTA . '/operaciones_resultados.php');
    }

    $dato = $dato[0];
    
}


require 'src/views/editar_operaciones.view.php';

?>