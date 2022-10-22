<?php

require 'header.php';

?>
<h3>Agregar Operaciones</h3>
<section class="contenedor contenido-section">
    <?php foreach($errores as $error): ?>
        <div class="error">
        <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset class="formulario">
            <legend>Operaciones</legend>
            <label for="operaciones_fecha">Fecha</label>
            <input type="date" name="operaciones_fecha" placeholder="fecha" id="operaciones_fecha">
            <label for="operaciones_orden_trabajo">Numero de Orden de Trabajo</label>
            <input type="text" name="operaciones_orden_trabajo" placeholder="orden de trabajo" id="operaciones_orden_trabajo">
            <label for="operaciones_nombre_pieza">Nombre de la Pieza</label>
            <input type="text" name="operaciones_nombre_pieza" placeholder="nombre de la pieza" id="operaciones_nombre_pieza">
            <label for="operaciones_nombre">Nombre de la Operación</label>
            <input type="text" name="operaciones_nombre" placeholder="nombre de la operacion" id="operaciones_nombre">
            <label for="operaciones_nombre_empleado">Nombre de Empleado</label>
            <input type="text" name="operaciones_nombre_empleado" placeholder="nombre de empleado" id="operaciones_nombre_empleado">
            <label for="fecha_inicio_operacion">Fecha de Inicio de Operación</label>
            <input type="date" name="fecha_inicio_operacion" placeholder="fecha nicio de operacion" id="fecha_inicio_operacion">
            <label for="tiempo_preparacion">Tiempo de preparación SET UP</label>
            <input type="text" name="tiempo_preparacion" placeholder="SET UP" id="tiempo_preparacion">
            <label for="hora_inicio_operacion">Hora de Inicio de Operación</label>
            <input type="time" name="hora_inicio_operacion" placeholder="hora de inicio de operacion" id="hora_inicio_operacion">
            <label for="fecha_fin_operacion">Fecha Fin de Operación</label>
            <input type="date" name="fecha_fin_operacion" placeholder="fecha fin de operacion" id="fecha_fin_operacion">
            <label for="hora_fin_operacion">Hora de Fin de Operación</label>
            <input type="time" name="hora_fin_operacion" placeholder="hora fin de operacion" id="hora_fin_operacion">
            <label for="operaciones_piezas_totales">Piezas Totales</label>
            <input type="number" name="operaciones_piezas_totales" placeholder="piezas totales" id="operaciones_piezas_totales">
            <label for="operaciones_piezas_defectuosas">Piezas Defectuosas</label>
            <input type="number" name="operaciones_piezas_defectuosas" placeholder="piezas defectuosas" id="operaciones_piezas_defectuosas">
            <label for="tiempo_programa">Tiempo del programa</label>
            <input type="text" name="tiempo_programa" placeholder="tiempo del programa" id="tiempo_programa">
            <label for="operaciones_comentarios">Comentarios</label>
            <textarea name="operaciones_comentarios" id="operaciones_comentarios" cols="50" rows="10" placeholder="agregar comentarios aqui..."></textarea>
            <input type="submit" value="Enviar" class="btn-enviar">
        </fieldset>
    </form>
</section>

<?php
require 'footer.php';

?>