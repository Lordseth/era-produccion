<?php

require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cliente = limpiarDatos($_POST['cliente']);
    $numero_orden = limpiarDatos($_POST['numero_orden']);
    $numero_parte = limpiarDatos($_POST['numero_parte']);
    $numero_dibujo = limpiarDatos($_POST['numero_dibujo']);
    $nombre_pieza = limpiarDatos($_POST['nombre_pieza']);
    $detalle = limpiarDatos($_POST['detalle']);
    $revision = limpiarDatos($_POST['revision']);
    $fecha_inicio_orden = limpiarDatos($_POST['fecha_inicio_orden']);
    $hora_inicio_orden = limpiarDatos($_POST['hora_inicio_orden']);
    $fecha_fin_orden = limpiarDatos($_POST['fecha_fin_orden']);
    $hora_fin_orden = limpiarDatos($_POST['hora_fin_orden']);
    $empleadoId = limpiarDatos($_POST['empleadoId']);
    $maquinaId = limpiarDatos($_POST['maquinaId']);
    $dibujo = ($_FILES['dibujo']['name']);
    $piezas_totales = limpiarDatos($_POST['piezas_totales']);
    $piezas_defectuosas = limpiarDatos($_POST['piezas_defectuosas']);
    $orden_trabajo_comentarios = limpiarDatos($_POST['orden_trabajo_comentarios']);
    $id = limpiarDatos($_POST['id']);

    $carpeta_destino = 'src/dibujos/';
        $archivo_subido = $carpeta_destino . $_FILES['dibujo']['name'];
        move_uploaded_file($_FILES['dibujo']['tmp_name'], $archivo_subido);


    $statement = $conexion->prepare('UPDATE orden_trabajo SET cliente = :cliente, numero_orden = :numero_orden, numero_parte = :numero_parte, numero_dibujo = :numero_dibujo, nombre_pieza = :nombre_pieza, detalle = :detalle, revision = :revision, fecha_inicio_orden = :fecha_inicio_orden, hora_inicio_orden = :hora_inicio_orden, fecha_fin_orden = :fecha_fin_orden, hora_fin_orden = :hora_fin_orden, dibujo = :dibujo, piezas_totales = :piezas_totales, piezas_defectuosas = :piezas_defectuosas, orden_trabajo_comentarios = :orden_trabajo_comentarios WHERE id = :id' );
    
    $statement->execute(array(
        ':cliente' => $cliente,
        ':numero_orden' => $numero_orden,
        ':numero_parte' => $numero_parte,
        ':numero_dibujo' => $numero_dibujo,
        ':nombre_pieza' => $nombre_pieza,
        ':detalle' => $detalle,
        ':revision' => $revision,
        ':fecha_inicio_orden' => $fecha_inicio_orden,
        ':hora_inicio_orden' => $hora_inicio_orden,
        ':fecha_fin_orden' => $fecha_fin_orden,
        ':hora_fin_orden' => $hora_fin_orden,
        ':dibujo' => $dibujo,
        ':piezas_totales' => $piezas_totales,
        ':piezas_defectuosas' => $piezas_defectuosas,
        ':orden_trabajo_comentarios' => $orden_trabajo_comentarios,
        ':id' => $id

    ));

    header('Location: ' . RUTA . '/orden_trabajo_resultados.php');

} else {
    $id_orden_trabajo = id_item($_GET['id']);

    if(empty($id_orden_trabajo)) {
        header('Location: ' .RUTA . '/orden_trabajo_resultados.php');
    }

    $dato = obtener_resultados_orden_trabajo_por_id($conexion, $id_orden_trabajo);

    if(!$dato) {
        header('Location: ' . RUTA . '/orden_trabajo_resultados.php');
    }

    $dato = $dato[0];
    
}

require 'src/views/editar_orden_trabajo.view.php';

?>