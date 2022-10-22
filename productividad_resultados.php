<?php 
require 'admin/config.php';

require 'funciones.php';

$conexion = conexion($bd_config);

$datos = obtenerProductividad($blog_config['post_por_pagina'], $conexion);

require 'src/views/productividad_resultados.view.php';

?>