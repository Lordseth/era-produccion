<?php

require 'vendor/autoload.php';


$mysqli = new mysqli('localhost', 'root', 'procesos', 'Productividad');

if ($mysqli->connect_errno) {
    echo 'Fallo la conexion ' . $mysqli->connect_errno;
    die();
}

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = "SELECT operaciones_fecha, operaciones_orden_trabajo, operaciones_nombre, operaciones_nombre_empleado, fecha_inicio_operacion, tiempo_preparacion, hora_inicio_operacion, fecha_fin_operacion, hora_fin_operacion, operaciones_piezas_totales, operaciones_piezas_defectuosas, tiempo_programa, operaciones_comentarios FROM operaciones";

$resultado = $mysqli->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("Operaciones");

$hojaActiva->setCellValue('A1', 'fecha');
$hojaActiva->setCellValue('B1', 'numero de orden de trabajo');
$hojaActiva->setCellValue('C1', 'nombre de operación');
$hojaActiva->setCellValue('D1', 'nombre de empleado');
$hojaActiva->setCellValue('E1', 'fecha inicio de operación');
$hojaActiva->setCellValue('F1', 'tiempo de preparacion');
$hojaActiva->setCellValue('G1', 'hora inicio de operación');
$hojaActiva->setCellValue('H1', 'fecha fin de operación');
$hojaActiva->setCellValue('I1', 'hora fin de operación');
$hojaActiva->setCellValue('J1', 'piezas totales');
$hojaActiva->setCellValue('K1', 'piezas defectuosas');
$hojaActiva->setCellValue('L1', 'tiempo del programa');

$fila = 2;

while($rows = $resultado->fetch_assoc()) {

    $hojaActiva->setCellValue('A'.$fila, $rows['operaciones_fecha']);
    $hojaActiva->setCellValue('B'.$fila, $rows['operaciones_orden_trabajo']);
    $hojaActiva->setCellValue('C'.$fila, $rows['operaciones_nombre']);
    $hojaActiva->setCellValue('D'.$fila, $rows['operaciones_nombre_empleado']);
    $hojaActiva->setCellValue('E'.$fila, $rows['fecha_inicio_operacion']);
    $hojaActiva->setCellValue('F'.$fila, $rows['tiempo_preparacion']);
    $hojaActiva->setCellValue('G'.$fila, $rows['hora_inicio_operacion']);
    $hojaActiva->setCellValue('H'.$fila, $rows['fecha_fin_operacion']);
    $hojaActiva->setCellValue('I'.$fila, $rows['hora_fin_operacion']);
    $hojaActiva->setCellValue('J'.$fila, $rows['operaciones_piezas_totales']);
    $hojaActiva->setCellValue('K'.$fila, $rows['operaciones_piezas_defectuosas']);
    $hojaActiva->setCellValue('L'.$fila, $rows['tiempo_programa']);
    
    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="operaciones.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;


?>