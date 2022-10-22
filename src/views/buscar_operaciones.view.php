<?php

require 'header.php';

?>

<h3>Resultado de Busqueda Operaciones</h3>

<section class="contenedor">
    <div class="operaciones-resultados-grid">
        <?php foreach($resultados as $dato):  ?>
            <div class="operaciones-resultados">
                <p><?php echo 'Fecha: '?><span class="datos"><?php echo $dato['operaciones_fecha'] ?></span></p>
                <p><?php echo 'Numero Orden de Trabajo: '?><span class="datos"><?php echo $dato['operaciones_orden_trabajo'] ?></span></p>
                <p><?php echo 'Nombre de la Pieza: '?><span class="datos"><?php echo $dato['operaciones_nombre_pieza'] ?></span></p>
                <p><?php echo 'Nombre de operación: '?><span class="datos"><?php echo $dato['operaciones_nombre'] ?></span></p>
                <p><?php echo 'Nombre de Empleado: '?><span class="datos"><?php echo $dato['operaciones_nombre_empleado'] ?></span></p>
                <p><?php echo 'Fecha de inicio operación: '?><span class="datos"><?php echo $dato['fecha_inicio_operacion'] ?></span></p>
                <p><?php echo 'Tiempo del Set Up: '?><span class="datos"><?php echo $dato['tiempo_preparacion'] ?></span></p>
                <p><?php echo 'Tiempo del programa: '?><span class="datos"><?php echo $dato['tiempo_programa'] ?></span></p>
                <p><?php echo 'Hora inicio de operación: '?><span class="datos"><?php echo $dato['hora_inicio_operacion'] ?></span></p>
                <p><?php echo 'Fecha fin de operación: '?><span class="datos"><?php echo $dato['fecha_fin_operacion'] ?></span></p>
                <p><?php echo 'Hora fin de operación: '?><span class="datos"><?php echo $dato['hora_fin_operacion'] ?></span></p>
                <p><?php echo 'Piezas Totales: '?><span class="datos"><?php echo $dato['operaciones_piezas_totales'] ?></span></p>
                <p><?php echo 'Piezas Defectuosas: '?><span class="datos"><?php echo $dato['operaciones_piezas_defectuosas'] ?></span></p>
                <p><?php echo 'Comentarios: '?><span class="datos"><?php echo $dato['operaciones_comentarios'] ?></span></p>
                <div class="botones-edicion">
                    <a class="btn-editar" href="editar_operaciones.php?id=<?php echo $dato['id']; ?>">Editar</a>
                    <a type="submit" class="btn-borrar" href="borrar_operaciones.php?id=<?php echo $dato['id']; ?>">Eliminar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>


<?php
require 'footer.php';

?>