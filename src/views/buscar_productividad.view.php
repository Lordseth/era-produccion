<?php

require 'header.php';

?>

<h3>Resultado de Busqueda Operaciones</h3>

<section class="contenedor">
    <div class="productividad-resultados-grid">
        <?php foreach($resultados as $dato):  ?>
            <div class="productividad-resultados">
                <p><?php echo 'Fecha: '?><span class="datos"><?php echo $dato['productividad_fecha'] ?></span></p>
                <p><?php echo 'Numero Orden de Trabajo: '?><span class="datos"><?php echo $dato['productividad_orden_trabajo'] ?></span></p>
                <p><?php echo 'Nombre de la Pieza: '?><span class="datos"><?php echo $dato['productividad_nombre_pieza'] ?></span></p>
                <p><?php echo 'Nombre de operación: '?><span class="datos"><?php echo $dato['productividad_operacion_nombre'] ?></span></p>
                <p><?php echo 'Nombre de Empleado: '?><span class="datos"><?php echo $dato['productividad_nombre_empleado'] ?></span></p>
                <p><?php echo 'Tiempo Real: '?><span class="datos"><?php echo $dato['tiempo_real'] ?></span></p>
                <p><?php echo 'Tiempo Disponible: '?><span class="datos"><?php echo $dato['tiempo_disponible'] ?></span></p>
                <p><?php echo 'Unidades Producidas: '?><span class="datos"><?php echo $dato['unidades_producidas'] ?></span></p>
                <p><?php echo 'Unidades Estimadas: '?><span class="datos"><?php echo $dato['unidades_estimadas'] ?></span></p>
                <p><?php echo 'Eficiencia Operador en Producción: '?><span class="datos"><?php echo $dato['eficiencia_operador'] ?></span></p>
                <p><?php echo 'Productividad: '?><span class="datos"><?php echo $dato['productividad_total'] ?></span></p>
                <p><?php echo 'Comentarios: '?><span class="datos"><?php echo $dato['productividad_comentarios'] ?></span></p>
                <div class="botones-edicion">
                    <a class="btn-editar" href="editar_productividad.php?id=<?php echo $dato['id']; ?>">Editar</a>
                    <a type="submit" class="btn-borrar" href="borrar_productividad.php?id=<?php echo $dato['id']; ?>">Eliminar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>


<?php
require 'footer.php';

?>