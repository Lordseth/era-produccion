<?php
require 'header.php';

?>

<h3>Editar Operaciones</h3>
<section class="contenedor contenido-section">
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset class="formulario">
            <legend>Operaciones</legend>
            <input type="hidden" value="<?php echo $dato['id']; ?>" name="id">
            <label for="operaciones_fecha">Fecha</label>
            <input type="date" name="operaciones_fecha" value="<?php echo $dato['operaciones_fecha']; ?>" id="operaciones_fecha">
            <label for="operaciones_orden_trabajo">Numero Orden de Trabajo</label>
            <input type="text" name="operaciones_orden_trabajo" value="<?php echo $dato['operaciones_orden_trabajo']; ?>" id="operaciones_orden_trabajo">
            <label for="operaciones_nombre_pieza">Nombre de la Pieza</label>
            <input type="text" name="operaciones_nombre_pieza" value="<?php echo $dato['operaciones_nombre_pieza']; ?>" id="operaciones_nombre_pieza">
            <label for="operaciones_nombre">Nombre de la Operación</label>
            <input type="text" name="operaciones_nombre" value="<?php echo $dato['operaciones_nombre']; ?>" id="operaciones_nombre">
            <label for="operaciones_nombre_empleado">Nombre de Empleado</label>
            <input type="text" name="operaciones_nombre_empleado" value="<?php echo $dato['operaciones_nombre_empleado']; ?>" id="operaciones_nombre_empleado">
            <label for="fecha_inicio_operacion">Fecha de Inicio de Operación</label>
            <input type="date" name="fecha_inicio_operacion" value="<?php echo $dato['fecha_inicio_operacion']; ?>" id="fecha_inicio_operacion">
            <label for="tiempo_preparacion">Tiempo de Preparación</label>
            <input type="text" name="tiempo_preparacion" value="<?php echo $dato['tiempo_preparacion']; ?>" id="tiempo_preparacion">
            <label for="hora_inicio_operacion">Hora de Inicio de Operación</label>
            <input type="time" name="hora_inicio_operacion" value="<?php echo $dato['hora_inicio_operacion']; ?>" id="hora_inicio_operacion">
            <label for="fecha_fin_operacion">Fecha Fin de Operación</label>
            <input type="date" name="fecha_fin_operacion" value="<?php echo $dato['fecha_fin_operacion']; ?>" id="fecha_fin_operacion">
            <label for="hora_fin_operacion">Hora de Fin de Operación</label>
            <input type="time" name="hora_fin_operacion" value="<?php echo $dato['hora_fin_operacion']; ?>" id="hora_fin_operacion">
            <label for="operaciones_piezas_totales">Piezas Totales</label>
            <input type="number" name="operaciones_piezas_totales" value="<?php echo $dato['operaciones_piezas_totales']; ?>" id="operaciones_piezas_totales">
            <label for="operaciones_piezas_defectuosas">Piezas Defectuosas</label>
            <input type="number" name="operaciones_piezas_defectuosas" value="<?php echo $dato['operaciones_piezas_defectuosas']; ?>" id="operaciones_piezas_defectuosas">
            <label for="tiempo_programa">Tiempo del programa</label>
            <input type="text" name="tiempo_programa" value="<?php echo $dato['tiempo_programa']; ?>" id="tiempo_programa">
            <label for="operaciones_comentarios">Comentarios</label>
            <textarea name="operaciones_comentarios" id="operaciones_comentarios" cols="50" rows="10"><?php echo $dato['operaciones_comentarios']; ?></textarea>
            <input type="submit" value="Editar operaciones" class="btn-enviar">
        </fieldset>
    </form>
</section>

<?php
require 'footer.php';

?>