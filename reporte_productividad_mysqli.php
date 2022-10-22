<?php

require 'vendor/autoload.php';


$mysqli = new mysqli('localhost', 'root', 'procesos', 'Productividad');

if ($mysqli->connect_errno) {
    echo 'Fallo la conexion ' . $mysqli->connect_errno;
    die();
}

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = "SELECT productividad_fecha, productividad_orden_trabajo, productividad_nombre_pieza, productividad_operacion_nombre, productividad_nombre_empleado, tiempo_real, tiempo_disponible, unidades_producidas, unidades_estimadas, eficiencia_operador, productividad_total, productividad_comentarios FROM productividad";

$resultado = $mysqli->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Productividad");

$hojaActiva->setCellValue('A1', 'fecha');
$hojaActiva->setCellValue('B1', 'numero de orden de trabajo');
$hojaActiva->setCellValue('C1', 'nombre de la pieza');
$hojaActiva->setCellValue('D1', 'nombre de la operación');
$hojaActiva->setCellValue('E1', 'nombre de empleado');
$hojaActiva->setCellValue('F1', 'tiempo real');
$hojaActiva->setCellValue('G1', 'tiempo disponible');
$hojaActiva->setCellValue('H1', 'unidades producidas');
$hojaActiva->setCellValue('I1', 'unidades estimadas');
$hojaActiva->setCellValue('J1', 'eficiencia operador');
$hojaActiva->setCellValue('K1', 'productividad');
$hojaActiva->setCellValue('L1', 'comentarios');

$fila = 2;

while($rows = $resultado->fetch_assoc()) {

    $hojaActiva->setCellValue('A'.$fila, $rows['productividad_fecha']);
    $hojaActiva->setCellValue('B'.$fila, $rows['productividad_orden_trabajo']);
    $hojaActiva->setCellValue('C'.$fila, $rows['productividad_nombre_pieza']);
    $hojaActiva->setCellValue('D'.$fila, $rows['productividad_operacion_nombre']);
    $hojaActiva->setCellValue('E'.$fila, $rows['productividad_nombre_empleado']);
    $hojaActiva->setCellValue('F'.$fila, $rows['tiempo_real']);
    $hojaActiva->setCellValue('G'.$fila, $rows['tiempo_disponible']);
    $hojaActiva->setCellValue('H'.$fila, $rows['unidades_producidas']);
    $hojaActiva->setCellValue('I'.$fila, $rows['unidades_estimadas']);
    $hojaActiva->setCellValue('J'.$fila, $rows['eficiencia_operador']);
    $hojaActiva->setCellValue('K'.$fila, $rows['productividad_total']);
    $hojaActiva->setCellValue('L'.$fila, $rows['productividad_comentarios']);
    
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="productividad.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;


?>