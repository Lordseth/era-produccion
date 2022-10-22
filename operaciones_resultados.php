<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

$datos = obtenerOperaciones($blog_config['post_por_pagina'], $conexion);

require 'src/views/operaciones_resultados.view.php';

?>