<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

$datos = obtenerOrden($blog_config['post_por_pagina'], $conexion);


require 'src/views/orden_trabajo_resultados.view.php';

?>

