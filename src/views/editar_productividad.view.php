<?php
require 'header.php';

?>

<h3>Editar Productividad</h3>
<section class="contenedor contenido-section">
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset class="formulario">
            <legend>Productividad</legend>
            <input type="hidden" value="<?php echo $dato['id']; ?>" name="id">
            <label for="productividad_fecha">Fecha</label>
            <input type="date" name="productividad_fecha" value="<?php echo $dato['productividad_fecha']; ?>" id="productividad_fecha">
            <label for="productividad_orden_trabajo">Numero Orden de Trabajo</label>
            <input type="text" name="productividad_orden_trabajo" value="<?php echo $dato['productividad_orden_trabajo']; ?>" id="productividad_orden_trabajo">
            <label for="productividad_nombre_pieza">Nombre de la Pieza</label>
            <input type="text" name="productividad_nombre_pieza" value="<?php echo $dato['productividad_nombre_pieza']; ?>" id="productividad_nombre_pieza">
            <label for="productividad_operacion_nombre">Nombre de la Operación</label>
            <input type="text" name="productividad_operacion_nombre" value="<?php echo $dato['productividad_operacion_nombre']; ?>" id="productividad_operacion_nombre">
            <label for="productividad_nombre_empleado">Nombre Operador</label>
            <input type="text" name="productividad_nombre_empleado" value="<?php echo $dato['productividad_nombre_empleado']; ?>" id="productividad_nombre_empleado">
            <label for="tiempo_real">Tiempo Real</label>
            <input type="text" name="tiempo_real" value="<?php echo $dato['tiempo_real']; ?>" id="tiempo_real">
            <label for="tiempo_disponible">Tiempo Disponible</label>
            <input type="text" name="tiempo_disponible" value="<?php echo $dato['tiempo_disponible']; ?>" id="tiempo_disponible">
            <label for="unidades_producidas">Unidades Producidas</label>
            <input type="number" name="unidades_producidas" value="<?php echo $dato['unidades_producidas']; ?>" id="unidades_producidas">
            <label for="unidades_estimadas">Unidades Estimadas</label>
            <input type="number" name="unidades_estimadas" value="<?php echo $dato['unidades_estimadas']; ?>" id="unidades_estimadas">
            <label for="eficiencia_operador">Eficiencia Operador en Producción</label>
            <input type="text" name="eficiencia_operador" value="<?php echo $dato['eficiencia_operador']; ?>" id="eficiencia_operador">
            <label for="productividad_total">Productividad</label>
            <input type="text" name="productividad_total" value="<?php echo $dato['productividad_total']; ?>" id="productividad_total">
            <label for="productividad_comentarios">Comentarios</label>
            <textarea name="productividad_comentarios" id="productividad_comentarios" cols="50" rows="10"><?php echo $dato['productividad_comentarios']; ?></textarea>
            <input type="submit" value="Editar Productividad" class="btn-enviar">
        </fieldset>
    </form>
</section>

<?php
require 'footer.php';

?>