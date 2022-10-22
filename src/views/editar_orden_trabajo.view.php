
<?php
require 'header.php';

?>

<h3>Editar Orden Trabajo</h3>
    <section class="contenedor contenido-section">
        <form  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <fieldset class="formulario">
                <legend>Orden de Trabajo</legend>
                <input type="hidden" value="<?php echo $dato['id']; ?>" name="id">
                <label for="cliente">Nombre del Cliente</label>
                <input type="text" name="cliente" value="<?php echo $dato['cliente']; ?>" id="cliente">
                <label for="numero_orden">Numero de Orden de Trabajo</label>
                <input type="text" name="numero_orden" value="<?php echo $dato['numero_orden']; ?>" id="numero_orden">
                <label for="numero_parte">Numero de Parte</label>
                <input type="text" name="numero_parte" value="<?php echo $dato['numero_parte']; ?>" id="numero_parte">
                <label for="numero_dibujo">Numero de Dibujo</label>
                <input type="text" name="numero_dibujo" value="<?php echo $dato['numero_dibujo']; ?>" id="numero_dibujo">
                <label for="nombre_pieza">Nombre de la Pieza</label>
                <input type="text" name="nombre_pieza" value="<?php echo $dato['nombre_pieza']; ?>" id="nombre_pieza">
                <label for="detalle">Detalle</label>
                <input type="text" name="detalle" value="<?php echo $dato['detalle']; ?>" id="detalle">
                <label for="revision">Revision</label>
                <input type="text" name="revision" value="<?php echo $dato['revision']; ?>" id="revision">
                <label for="fecha_inicio_orden">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio_orden" value="<?php echo $dato['fecha_inicio_orden']; ?>" id="fecha_inicio_orden">
                <label for="hora_inicio">Hora de Inicio</label>
                <input type="time" name="hora_inicio_orden" id="hora_inicio_orden" value="<?php echo $dato['hora_inicio_orden']; ?>">
                <label for="fecha_fin_orden">Fecha fin</label>
                <input type="date" name="fecha_fin_orden" value="<?php echo $dato['fecha_fin_orden']; ?>" id="fecha_fin_orden">
                <label for="hora_fin_orden">Hora fin</label>
                <input type="time" name="hora_fin_orden" id="hora_inicio_orden" value="<?php echo $dato['hora_fin_orden']; ?>">
                <label for="dibujo">Selecciona el dibujo</label>
                <input type="file" name="dibujo" >
                <input type="hidden" name="dibujo" value="<?php echo $dato['dibujo']; ?>">
                <label for="piezas_totales">Piezas Totales</label>
                <input type="number" name="piezas_totales" value="<?php echo $dato['piezas_totales']; ?>" id="piezas_totales">
                <label for="piezas_defectuosas">Piezas Defectuosas</label>
                <input type="number" name="piezas_defectuosas" value="<?php echo $dato['piezas_defectuosas']; ?>" id="piezas_defectuosas">
                <label for="orden_trabajo_comentarios">Comentarios</label>
                <textarea name="orden_trabajo_comentarios" id="orden_trabajo_comentarios" cols="30" rows="10"><?php echo $dato['orden_trabajo_comentarios']; ?></textarea>
                <input type="submit" value="Editar Orden de Trabajo" class="btn-enviar">
            </fieldset>
            
        </form>
    </section>

    <?php
require 'footer.php';

?>
