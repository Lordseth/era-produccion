
<?php
require 'header.php';

?>

<h3>Agregar Orden Trabajo</h3>
    <section class="contenedor contenido-section">
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <fieldset class="formulario">
                <legend>Orden de Trabajo</legend>
                <label for="cliente">Nombre del Cliente</label>
                <input type="text" name="cliente" placeholder="nombre del cliente" id="cliente">
                <label for="numero_orden">Numero de Orden de Trabajo</label>
                <input type="text" name="numero_orden" placeholder="numero de orden" id="numero_orden">
                <label for="numero_parte">Numero de Parte</label>
                <input type="text" name="numero_parte" placeholder="numero de parte" id="numero_parte">
                <label for="numero_dibujo">Numero de Dibujo</label>
                <input type="text" name="numero_dibujo" placeholder="numero de dibujo" id="numero_dibujo">
                <label for="nombre_pieza">Nombre de la Pieza</label>
                <input type="text" name="nombre_pieza" placeholder="nombre de la pieza" id="nombre_pieza">
                <label for="detalle">Detalle</label>
                <input type="text" name="detalle" placeholder="detalle" id="detalle">
                <label for="revision">Revision</label>
                <input type="text" name="revision" placeholder="revision" id="revision">
                <label for="fecha_inicio_orden">Fecha de Inicio</label>
                <input type="date" name="fecha_inicio_orden" placeholder="fecha de inicio" id="fecha_inicio_orden">
                <label for="hora_inicio">Hora de Inicio</label>
                <input type="time" name="hora_inicio_orden" id="hora_inicio_orden" placeholder="hora de inicio">
                <label for="fecha_fin_orden">Fecha fin</label>
                <input type="date" name="fecha_fin_orden" placeholder="fecha fin" id="fecha_fin_orden">
                <label for="hora_fin_orden">Hora fin</label>
                <input type="time" name="hora_fin_orden" id="hora_inicio_orden" placeholder="hora fin_orden">
                <label for="dibujo">Selecciona el dibujo</label>
                <input type="file" name="dibujo" id="dibujo">
                <label for="piezas_totales">Piezas Totales</label>
                <input type="number" name="piezas_totales" placeholder="piezas totales" id="piezas_totales">
                <label for="piezas_defectuosas">Piezas Defectuosas</label>
                <input type="number" name="piezas_defectuosas" placeholder="piezas defectuosas" id="piezas_defectuosas">
                <label for="orden_trabajo_comentarios">Comentarios</label>
                <textarea name="orden_trabajo_comentarios" placeholder="agregar comentarios aqui..." id="orden_trabajo_comentarios" cols="50" rows="10"></textarea>
                <input type="submit" value="Enviar" class="btn-enviar">
            </fieldset>
            
        </form>
    </section>


    <?php
require 'footer.php';

?>
