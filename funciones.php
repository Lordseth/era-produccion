<?php 

function conexion($bd_config) {

    try {
        $conexion = new PDO('mysql:host=localhost;dbname='. $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}


function pagina_actual() {
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerOrden($orden_por_pagina, $conexion) {
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $orden_por_pagina - $orden_por_pagina : 0;
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM orden_trabajo LIMIT $inicio, $orden_por_pagina");
    $statement->execute();
    $datos = $statement->fetchAll();
    return $datos;
}

function numero_paginas_ordenes($orden_por_pagina, $conexion) {
    $total_ordenes = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_ordenes->execute();
    $total_ordenes = $total_ordenes->fetch()['total'];

    $numero_paginas = ceil($total_ordenes / $orden_por_pagina);
    return $numero_paginas;
}

function obtenerOperaciones($operaciones_por_pagina, $conexion) {
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $operaciones_por_pagina - $operaciones_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM operaciones LIMIT $inicio, $operaciones_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function numero_paginas_operaciones($operaciones_por_pagina, $conexion) {
    $total_operaciones = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_operaciones->execute();
    $total_operaciones = $total_operaciones->fetch()['total'];

    $numero_paginas = ceil($total_operaciones / $operaciones_por_pagina);
    return $numero_paginas;
}

function obtenerProductividad($productividad_por_pagina, $conexion) {
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $productividad_por_pagina - $productividad_por_pagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM productividad LIMIT $inicio, $productividad_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function numero_paginas_productividad($productividad_por_pagina, $conexion) {
    $total_productividad = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_productividad->execute();
    $total_operaciones = $total_productividad->fetch()['total'];

    $numero_paginas = ceil($total_operaciones / $productividad_por_pagina);
    return $numero_paginas;
}

function id_item($id) {
    return (int)limpiarDatos($id);
}



function obtener_resultados_orden_trabajo_por_id($conexion, $id) {
    $resultado = $conexion->query("SELECT * FROM orden_trabajo WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtener_resultados_operaciones_por_id($conexion, $id) {
    $resultado = $conexion->query("SELECT * FROM operaciones WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function obtener_resultados_productividad_por_id($conexion, $id) {
    $resultado = $conexion->query("SELECT * FROM productividad WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}


?>
