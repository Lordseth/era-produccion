<?php
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operaciones_fecha = limpiarDatos($_POST['operaciones_fecha']);
    $operaciones_orden_trabajo = limpiarDatos($_POST['operaciones_orden_trabajo']);
    $operaciones_nombre_pieza = limpiarDatos($_POST['operaciones_nombre_pieza']);
    $operaciones_nombre = limpiarDatos($_POST['operaciones_nombre']);
    $operaciones_nombre_empleado = limpiarDatos($_POST['operaciones_nombre_empleado']);
    $fecha_inicio_operacion = ($_POST['fecha_inicio_operacion']);
    $tiempo_preparacion = ($_POST['tiempo_preparacion']);
    $hora_inicio_operacion = ($_POST['hora_inicio_operacion']);
    $fecha_fin_operacion = ($_POST['fecha_fin_operacion']);
    $hora_fin_operacion = ($_POST['hora_fin_operacion']);
    $operaciones_piezas_totales = ($_POST['operaciones_piezas_totales']);
    $operaciones_piezas_defectuosas = ($_POST['operaciones_piezas_defectuosas']);
    $tiempo_programa = ($_POST['tiempo_programa']);
    $operaciones_comentarios = ($_POST['operaciones_comentarios']);

    if(!$operaciones_fecha) {
        $errores[] = "Debes añadir una fecha (actual)";
    }

    if(!$operaciones_nombre_pieza) {
        $errores[] = "Debes añadir un nombre de pieza";
    }

    if(!$operaciones_nombre) {
        $errores[] = "Debes añadir un nombre de operacion";
    }

    if(!$operaciones_nombre_empleado) {
        $errores[] = "Debes añadir un nombre de empleado";
    }

    if(!$fecha_inicio_operacion) {
        $errores[] = "Debes añadir una fecha de inicio de operación";
    }

    if(!$tiempo_preparacion) {
        $errores[] = "Debes añadir el tiempo de SET UP";
    }

    if(!$hora_inicio_operacion) {
        $errores[] = "Debes añadir la hora de inicio de operación";
    }

    if(!$fecha_fin_operacion) {
        $errores[] = "Debes añadir la fecha fin de operación";
    }

    if(!$hora_fin_operacion) {
        $errores[] = "Debes añadir la hora fin de operación";
    }

    if(!$operaciones_piezas_totales) {
        $errores[] = "Debes añadir las piezas totales";
    }

    if(!$operaciones_piezas_defectuosas) {
        $errores[] = "Debes añadir las piezas defectuosas";
    }

    if(!$tiempo_programa) {
        $errores[] = "Debes añadir el tiempo de programa";
    }

    if(empty($errores)) {

        $statement = $conexion->prepare('INSERT INTO operaciones (operaciones_fecha, operaciones_orden_trabajo, operaciones_nombre_pieza, operaciones_nombre, operaciones_nombre_empleado, fecha_inicio_operacion, tiempo_preparacion, hora_inicio_operacion, fecha_fin_operacion, hora_fin_operacion, operaciones_piezas_totales, operaciones_piezas_defectuosas, tiempo_programa, operaciones_comentarios) VALUES(:operaciones_fecha, :operaciones_orden_trabajo, :operaciones_nombre_pieza, :operaciones_nombre, :operaciones_nombre_empleado, :fecha_inicio_operacion, :tiempo_preparacion, :hora_inicio_operacion, :fecha_fin_operacion, :hora_fin_operacion, :operaciones_piezas_totales, :operaciones_piezas_defectuosas, :tiempo_programa, :operaciones_comentarios)');

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
        ':operaciones_comentarios' => $operaciones_comentarios
    ));

    }

    
}


require 'src/views/operaciones.view.php';
?>