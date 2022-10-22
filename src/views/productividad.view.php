<?php

require 'header.php';

?>
<h3>Agregar Hoja de Productividad</h3>
<section class="contenedor contenido-section">
    <?php foreach($errores as $error): ?>
        <div class="error">
        <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset class="formulario">
            <legend>Productividad</legend>
            <label for="productividad_fecha">Fecha</label>
            <input type="date" name="productividad_fecha" placeholder="fecha" id="productividad_fecha">
            <label for="productividad_orden_trabajo">Numero de Orden de Trabajo</label>
            <input type="text" name="productividad_orden_trabajo" placeholder="orden de trabajo" id="productividad_orden_trabajo">
            <label for="productividad_nombre_pieza">Nombre de la Pieza</label>
            <input type="text" name="productividad_nombre_pieza" placeholder="nombre de la pieza" id="productividad_nombre_pieza">
            <label for="productividad_operacion_nombre">Nombre de la Operación</label>
            <input type="text" name="productividad_operacion_nombre" placeholder="nombre de la operacion" id="productividad_operacion_nombre">
            <label for="productividad_nombre_empleado">Operador</label>
            <input type="text" name="productividad_nombre_empleado" placeholder="nombre operador" id="productividad_nombre_empleado">
            <label for="tiempo_real">Tiempo Real</label>
            <input type="text" name="tiempo_real" placeholder="tiempo real" id="tiempo_real">
            <label for="tiempo_disponible">Tiempo Disponible</label>
            <input type="text" name="tiempo_disponible" placeholder="tiempo disponible" id="tiempo_disponible">
            <label for="unidades_producidas">Unidades Producidas</label>
            <input type="number" name="unidades_producidas" placeholder="unidades producidas" id="unidades_producidas">
            <label for="unidades_estimadas">Unidades Estimadas</label>
            <input type="number" name="unidades_estimadas" placeholder="unidades estimadas" id="unidades_estimadas">
            <label for="eficiencia_operador">Eficiencia Operador en Producción</label>
            <input type="text" name="eficiencia_operador" placeholder="eficiencia" id="eficiencia_operador">
            <label for="productividad_total">Productividad</label>
            <input type="text" name="productividad_total" placeholder="productividad" id="productividad_total">
            <label for="productividad_comentarios">Comentarios</label>
            <textarea name="productividad_comentarios" id="productividad_comentarios" cols="50" rows="10" placeholder="agregar comentarios aqui..."></textarea>
            <input type="submit" value="Enviar" class="btn-enviar">
        </fieldset>
    </form>
</section>

<?php
require 'footer.php';

?>