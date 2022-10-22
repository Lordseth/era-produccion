<?php

require 'vendor/autoload.php';


$mysqli = new mysqli('localhost', 'root', 'procesos', 'Productividad');

if ($mysqli->connect_errno) {
    echo 'Fallo la conexion ' . $mysqli->connect_errno;
    die();
}

use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};

$sql = "SELECT id, cliente, numero_orden, numero_parte, numero_dibujo, nombre_pieza, detalle, revision, fecha_inicio_orden, hora_inicio_orden, fecha_fin_orden, hora_fin_orden, dibujo, piezas_totales, piezas_defectuosas, orden_trabajo_comentarios FROM orden_trabajo";

$resultado = $mysqli->query($sql);

$excel = new Spreadsheet();
$hojaActiva = $excel->getActiveSheet();
$hojaActiva->setTitle("ordenTrabajo");

$hojaActiva->setCellValue('A1', 'id');
$hojaActiva->setCellValue('B1', 'cliente');
$hojaActiva->setCellValue('C1', 'numero de orden');
$hojaActiva->setCellValue('D1', 'numero de parte');
$hojaActiva->setCellValue('E1', 'numero de dibujo');
$hojaActiva->setCellValue('F1', 'nombre de la pieza');
$hojaActiva->setCellValue('G1', 'detalle');
$hojaActiva->setCellValue('H1', 'revision');
$hojaActiva->setCellValue('I1', 'fecha de inicio de orden');
$hojaActiva->setCellValue('J1', 'hora de inicio de orden');
$hojaActiva->setCellValue('K1', 'fecha fin de orden');
$hojaActiva->setCellValue('L1', 'hora fin de orden');
$hojaActiva->setCellValue('M1', 'dibujo');
$hojaActiva->setCellValue('N1', 'piezas totales');
$hojaActiva->setCellValue('O1', 'piezas defectuosas');
$hojaActiva->setCellValue('P1', 'Comentarios');

$fila = 2;

while($rows = $resultado->fetch_assoc()) {
    $hojaActiva->setCellValue('A'.$fila, $rows['id']);
    $hojaActiva->setCellValue('B'.$fila, $rows['cliente']);
    $hojaActiva->setCellValue('C'.$fila, $rows['numero_orden']);
    $hojaActiva->setCellValue('D'.$fila, $rows['numero_parte']);
    $hojaActiva->setCellValue('E'.$fila, $rows['numero_dibujo']);
    $hojaActiva->setCellValue('F'.$fila, $rows['nombre_pieza']);
    $hojaActiva->setCellValue('G'.$fila, $rows['detalle']);
    $hojaActiva->setCellValue('H'.$fila, $rows['revision']);
    $hojaActiva->setCellValue('I'.$fila, $rows['fecha_inicio_orden']);
    $hojaActiva->setCellValue('J'.$fila, $rows['hora_inicio_orden']);
    $hojaActiva->setCellValue('K'.$fila, $rows['fecha_fin_orden']);
    $hojaActiva->setCellValue('L'.$fila, $rows['hora_fin_orden']);
    $hojaActiva->setCellValue('M'.$fila, $rows['dibujo']);
    $hojaActiva->setCellValue('N'.$fila, $rows['piezas_totales']);
    $hojaActiva->setCellValue('O'.$fila, $rows['piezas_defectuosas']);
    $hojaActiva->setCellValue('P'.$fila, $rows['orden_trabajo_comentarios']);

    $fila++;
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ordenTrabajo.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel, 'Xlsx');
$writer->save('php://output');
exit;


?>