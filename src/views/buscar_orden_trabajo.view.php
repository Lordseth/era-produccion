<?php

require 'header.php';

?>

<div class="busqueda-contenedor">
    <h3>Resultado de Busqueda Orden de Trabajo</h3>
    <div class="busqueda-formulario">
        <form class="formulario-busqueda" action="<?php echo RUTA; ?>/buscar_orden_trabajo.php" method="get">
            <label class="etiqueta-busqueda" for="buscar">Buscar Ordenes de Trabajo</label>
            <input type="text" name="busqueda" value="" id="buscar">
            <input class="btn-buscar" type="submit" value="Buscar">
        </form>
    </div>
</div>

<section class="contenedor">
    <div class="orden-trabajo-resultados-grid">
        <?php foreach ($resultados as $dato) :  ?>
            <div class="orden-trabajo-resultados">
                <div>
                    <p><?php echo 'Identificador: ' ?><span class="datos"><?php echo $dato['id'] ?></span></p>
                    <p><?php echo 'Cliente: ' ?><span class="datos"><?php echo $dato['cliente'] ?></span></p>
                    <p><?php echo 'Numero de orden: ' ?><span class="datos"><?php echo $dato['numero_orden'] ?></span></p>
                    <p><?php echo 'Numero de parte: ' ?><span class="datos"><?php echo $dato['numero_parte'] ?></span></p>
                    <p><?php echo 'Numero de dibujo: ' ?><span class="datos"><?php echo $dato['numero_dibujo'] ?></span></p>
                    <p><?php echo 'Nombre de la Pieza: ' ?><span class="datos"><?php echo $dato['nombre_pieza'] ?></span></p>
                    <p><?php echo 'Detalle: ' ?><span class="datos"><?php echo $dato['detalle'] ?></span></p>
                    <p><?php echo 'Revisión: ' ?><span class="datos"><?php echo $dato['revision'] ?></span></p>
                    <p><?php echo 'Fecha de inicio de orden: ' ?><span class="datos"><?php echo $dato['fecha_inicio_orden'] ?></span></p>
                    <p><?php echo 'Hora de inicio de orden: ' ?><span class="datos"><?php echo $dato['hora_inicio_orden'] ?></span></p>
                    <p><?php echo 'Fecha de cierre de orden: ' ?><span class="datos"><?php echo $dato['fecha_fin_orden'] ?></span></p>
                    <p><?php echo 'Hora de cierre de orden: ' ?><span class="datos"><?php echo $dato['hora_fin_orden'] ?></span></p>
                    <p><?php echo 'Comentarios: '?><span class="datos"><?php echo $dato['orden_trabajo_comentarios'] ?></span></p>
                </div>

                <div class="pdf">
                    <embed width="100%" height="100%" src="/src/dibujos/<?php echo $dato['dibujo'] ?>" type="application/pdf">
                </div>
    
                <div class="botones-edicion">
                    <a class="btn-editar" href="editar_orden_trabajo.php?id=<?php echo $dato['id']; ?>">Editar</a>
                    <a type="submit" class="btn-borrar" href="borrar_orden_trabajo.php?id=<?php echo $dato['id']; ?>">Eliminar</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>


<?php
require 'footer.php';

?>