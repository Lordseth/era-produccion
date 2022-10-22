<?php

require 'header.php';

?>

<div class="busqueda-contenedor">
    <h3>Productividad</h3>
    <div class="busqueda-formulario">
        <form class="formulario-busqueda" action="<?php echo RUTA; ?>/buscar_productividad.php" method="get">
            <label class="etiqueta-busqueda" for="buscar">Buscar Productividad</label>
            <input type="text" name="busqueda" value="" id="buscar">
            <input class="btn-buscar" type="submit" value="Buscar">
        </form>
    </div>
</div>

<div class="excel">
    <p class="excel-leyenda">Crear Documento en Excel</p>
    <a class="link-excel" href="reporte_productividad_mysqli.php"><img class="excel-logo" src="/src/images/excel-logo.png" alt="logo-png"></a>
</div>

<section class="contenedor">
    <div class="productividad-resultados-grid">
        <?php foreach ($datos as $dato) :  ?>
            <div class="productividad-resultados">
                <p><?php echo 'Fecha: ' ?><span class="datos"><?php echo $dato['productividad_fecha'] ?></span></p>
                <p><?php echo 'Numero de Orden de Trabajo: ' ?><span class="datos"><?php echo $dato['productividad_orden_trabajo'] ?></span></p>
                <p><?php echo 'Nombre de la Pieza: ' ?><span class="datos"><?php echo $dato['productividad_nombre_pieza'] ?></span></p>
                <p><?php echo 'Nombre de operación: ' ?><span class="datos"><?php echo $dato['productividad_operacion_nombre'] ?></span></p>
                <p><?php echo 'Nombre Operador: ' ?><span class="datos"><?php echo $dato['productividad_nombre_empleado'] ?></span></p>
                <p><?php echo 'Tiempo Real: ' ?><span class="datos"><?php echo $dato['tiempo_real'] ?></span></p>
                <p><?php echo 'Tiempo Disponible: ' ?><span class="datos"><?php echo $dato['tiempo_disponible'] ?></span></p>
                <p><?php echo 'Unidades Producidas: ' ?><span class="datos"><?php echo $dato['unidades_producidas'] ?></span></p>
                <p><?php echo 'Unidades Estimadas: ' ?><span class="datos"><?php echo $dato['unidades_estimadas'] ?></span></p>
                <p><?php echo 'Eficiencia Operador en Producción: ' ?><span class="datos"><?php echo $dato['eficiencia_operador'] ?></span></p>
                <p><?php echo 'Productividad: ' ?><span class="datos"><?php echo $dato['productividad_total'] ?></span></p>
                <p><?php echo 'Comentarios: ' ?><span class="datos"><?php echo $dato['productividad_comentarios'] ?></span></p>
                <div class="botones-edicion">
                    <a class="btn-editar" href="editar_productividad.php?id=<?php echo $dato['id']; ?>">Editar</a>
                    <a type="submit" class="btn-borrar" href="borrar_productividad.php?id=<?php echo $dato['id']; ?>">Eliminar</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <?php require 'paginacion_productividad.php'; ?>

</section>


<?php
require 'footer.php';

?>