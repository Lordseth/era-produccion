<?php
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productividad_fecha = limpiarDatos($_POST['productividad_fecha']);
    $productividad_orden_trabajo = limpiarDatos($_POST['productividad_orden_trabajo']);
    $productividad_nombre_pieza = limpiarDatos($_POST['productividad_nombre_pieza']);
    $productividad_operacion_nombre = limpiarDatos($_POST['productividad_operacion_nombre']);
    $productividad_nombre_empleado = limpiarDatos($_POST['productividad_nombre_empleado']);
    $tiempo_real = ($_POST['tiempo_real']);
    $tiempo_disponible = ($_POST['tiempo_disponible']);
    $unidades_producidas = ($_POST['unidades_producidas']);
    $unidades_estimadas = ($_POST['unidades_estimadas']);
    $eficiencia_operador = ($_POST['eficiencia_operador']);
    $productividad_total = ($_POST['productividad_total']);
    $productividad_comentarios = ($_POST['productividad_comentarios']);

    if(!$productividad_fecha) {
        $errores[] = "Debes añadir una fecha (actual)";
    }

    if(!$productividad_nombre_pieza) {
        $errores[] = "Debes añadir un nombre de pieza";
    }

    if(!$productividad_operacion_nombre) {
        $errores[] = "Debes añadir un nombre de operacion";
    }

    if(!$productividad_nombre_empleado) {
        $errores[] = "Debes añadir un nombre de operador";
    }

    if(!$tiempo_real) {
        $errores[] = "Debes añadir el tiempo real";
    }

    if(!$tiempo_disponible) {
        $errores[] = "Debes añadir el tiempo disponible";
    }

    if(!$unidades_producidas) {
        $errores[] = "Debes añadir las unidades producidas";
    }

    if(!$unidades_estimadas) {
        $errores[] = "Debes añadir las unidades estimadas";
    }

    if(!$eficiencia_operador) {
        $errores[] = "Debes añadir la eficiencia del operador";
    }

    if(!$productividad_total) {
        $errores[] = "Debes añadir la productividad";
    }

    if(empty($errores)) {

        $statement = $conexion->prepare('INSERT INTO productividad (productividad_fecha, productividad_orden_trabajo, productividad_nombre_pieza, productividad_operacion_nombre, productividad_nombre_empleado, tiempo_real, tiempo_disponible, unidades_producidas, unidades_estimadas, eficiencia_operador, productividad_total, productividad_comentarios) VALUES(:productividad_fecha, :productividad_orden_trabajo, :productividad_nombre_pieza, :productividad_operacion_nombre, :productividad_nombre_empleado, :tiempo_real, :tiempo_disponible, :unidades_producidas, :unidades_estimadas, :eficiencia_operador, :productividad_total, :productividad_comentarios)');

    $statement->execute(array(
        ':productividad_fecha' => $productividad_fecha,
        ':productividad_orden_trabajo' => $productividad_orden_trabajo,
        ':productividad_nombre_pieza' => $productividad_nombre_pieza,
        ':productividad_operacion_nombre' => $productividad_operacion_nombre,
        ':productividad_nombre_empleado' => $productividad_nombre_empleado,
        ':tiempo_real' => $tiempo_real,
        ':tiempo_disponible' => $tiempo_disponible,
        ':unidades_producidas' => $unidades_producidas,
        ':unidades_estimadas'=> $unidades_estimadas,
        ':eficiencia_operador' => $eficiencia_operador,
        ':productividad_total' => $productividad_total,
        ':productividad_comentarios' => $productividad_comentarios
    ));

    }

    

}


require 'src/views/productividad.view.php';
?>