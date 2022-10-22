<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $cliente = limpiarDatos($_POST['cliente']);
    $numero_orden = limpiarDatos($_POST['numero_orden']);
    $numero_parte = limpiarDatos($_POST['numero_parte']);
    $numero_dibujo = limpiarDatos(($_POST['numero_dibujo']));
    $nombre_pieza = limpiarDatos($_POST['nombre_pieza']);
    $detalle = limpiarDatos($_POST['detalle']);
    $revision = limpiarDatos($_POST['revision']);
    $fecha_inicio_orden = ($_POST['fecha_inicio_orden']);
    $hora_inicio_orden = ($_POST['hora_inicio_orden']);
    $fecha_fin_orden = ($_POST['fecha_fin_orden']);
    $hora_fin_orden = ($_POST['hora_fin_orden']);
    $dibujo = ($_FILES['dibujo']['name']);
    $piezas_totales = ($_POST['piezas_totales']);
    $piezas_defectuosas = ($_POST['piezas_defectuosas']);
    $orden_trabajo_comentarios = ($_POST['orden_trabajo_comentarios']);
    
        $carpeta_destino = 'src/dibujos/';
        $archivo_subido = $carpeta_destino . $_FILES['dibujo']['name'];
        move_uploaded_file($_FILES['dibujo']['tmp_name'], $archivo_subido);


    $statement = $conexion->prepare('INSERT INTO orden_trabajo (cliente, numero_orden, numero_parte, numero_dibujo, nombre_pieza, detalle, revision, fecha_inicio_orden, hora_inicio_orden, fecha_fin_orden, hora_fin_orden, dibujo, piezas_totales, piezas_defectuosas, orden_trabajo_comentarios) VALUES(:cliente, :numero_orden, :numero_parte, :numero_dibujo, :nombre_pieza, :detalle, :revision, :fecha_inicio_orden, :hora_inicio_orden, :fecha_fin_orden, :hora_fin_orden, :dibujo, :piezas_totales, :piezas_defectuosas, :orden_trabajo_comentarios)');

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
        ':orden_trabajo_comentarios' => $orden_trabajo_comentarios
    ));


}


require 'src/views/orden_trabajo.view.php';


?>