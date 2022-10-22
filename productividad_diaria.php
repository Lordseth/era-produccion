<?php
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productividad_diaria_fecha = limpiarDatos($_POST['productividad_diaria_fecha']);
    $productividad_diaria_nombre_empleado = limpiarDatos($_POST['productividad_diaria_nombre_empleado']);
    $productividad_diaria_numero_parte = limpiarDatos($_POST['productividad_diaria_numero_parte']);
    $productividad_diaria_lote = limpiarDatos($_POST['productividad_diaria_lote']);
    $productividad_diaria_piezas_inciales = limpiarDatos($_POST['productividad_diaria_piezas_inciales']);
    $productividad_diaria_proceso = limpiarDatos($_POST['productividad_diaria_proceso']);
    $productividad_diaria_tiempo_maquina = ($_POST['productividad_diaria_tiempo_maquina']);
    $productividad_diaria_hora_inicio = ($_POST['productividad_diaria_hora_inicio']);
    $productividad_diaria_hora_fin = ($_POST['productividad_diaria_hora_fin']);
    $productividad_diaria_piezas_fin_turno = ($_POST['productividad_diaria_piezas_fin_turno']);
    $productividad_dia = ($_POST['productividad_dia']);

    $statement = $conexion->prepare('INSERT INTO productividad_diaria (productividad_diaria_fecha, productividad_diaria_nombre_empleado, productividad_diaria_numero_parte, productividad_diaria_lote, productividad_diaria_piezas_inciales, productividad_diaria_proceso, productividad_diaria_tiempo_maquina, productividad_diaria_hora_inicio, productividad_diaria_hora_fin, productividad_diaria_piezas_fin_turno, productividad_dia) VALUES(:productividad_diaria_fecha, :productividad_diaria_nombre_empleado, :productividad_diaria_numero_parte, :productividad_diaria_lote, :productividad_diaria_piezas_inciales, :productividad_diaria_proceso, :productividad_diaria_tiempo_maquina, :productividad_diaria_hora_inicio, :productividad_diaria_hora_fin, :productividad_diaria_piezas_fin_turno, :productividad_dia)');

    $statement->execute(array(
        ':productividad_diaria_fecha' => $productividad_diaria_fecha,
        ':productividad_diaria_nombre_empleado' => $productividad_diaria_nombre_empleado,
        ':productividad_diaria_numero_parte' => $productividad_diaria_numero_parte,
        ':productividad_diaria_lote' => $productividad_diaria_lote,
        ':productividad_diaria_piezas_inciales' => $productividad_diaria_piezas_inciales,
        ':productividad_diaria_proceso' => $productividad_diaria_proceso,
        ':productividad_diaria_tiempo_maquina' => $productividad_diaria_tiempo_maquina,
        ':productividad_diaria_hora_inicio' => $productividad_diaria_hora_inicio,
        ':productividad_diaria_hora_fin'=> $productividad_diaria_hora_fin,
        ':productividad_diaria_piezas_fin_turno' => $productividad_diaria_piezas_fin_turno,
        ':productividad_dia' => $productividad_dia
    ));


}


require 'src/views/productividad_diaria.view.php';
?>