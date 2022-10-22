<?php

require 'header.php';

?>
<h3>Agregar Hoja de Productividad Diaria</h3>
<section class="contenedor contenido-section">
    <form  method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset class="formulario">
            <legend>Productividad Diaria</legend>
            <label for="productividad_diaria_fecha">Fecha</label>
            <input type="date" name="productividad_diaria_fecha" placeholder="fecha" id="productividad_diaria_fecha">
            <label for="productividad_diaria_nombre_empleado">Nombre de Operador</label>
            <input type="text" name="productividad_diaria_nombre_empleado" placeholder="nombre de operador" id="productividad_diaria_nombre_empleado">
            <label for="productividad_diaria_numero_parte">Numero de Parte</label>
            <input type="text" name="productividad_diaria_numero_parte" placeholder="numero de parte" id="productividad_diaria_numero_parte">
            <label for="productividad_diaria_lote">Lote</label>
            <input type="text" name="productividad_diaria_lote" placeholder="lote" id="productividad_diaria_lote">
            <label for="productividad_diaria_piezas_inciales">Piezas Iniciales</label>
            <input type="text" name="productividad_diaria_piezas_inciales" placeholder="piezas iniciales" id="productividad_diaria_piezas_inciales">
            <label for="productividad_diaria_proceso">Proceso</label>
            <input type="text" name="productividad_diaria_proceso" placeholder="proceso" id="productividad_diaria_proceso">
            <label for="productividad_diaria_tiempo_maquina">Tiempo Maquina</label>
            <input type="text" name="productividad_diaria_tiempo_maquina" placeholder="tiempo maquina" id="productividad_diaria_tiempo_maquina">
            <label for="productividad_diaria_hora_inicio">Hora Inicio</label>
            <input type="text" name="productividad_diaria_hora_inicio" placeholder="hora inicio" id="productividad_diaria_hora_inicio">
            <label for="productividad_diaria_hora_fin">Hora Fin</label>
            <input type="number" name="productividad_diaria_hora_fin" placeholder="hora fin" id="productividad_diaria_hora_fin">
            <label for="productividad_diaria_piezas_fin_turno">Piezas Fin de Turno</label>
            <input type="text" name="productividad_diaria_piezas_fin_turno" placeholder="piezas fin de turno" id="productividad_diaria_piezas_fin_turno">
            <label for="productividad_dia">Productividad Diaria</label>
            <input type="text" name="productividad_dia" placeholder="productividad del dia" id="productividad_dia">
            <input type="submit" value="Enviar" class="btn-enviar">
        </fieldset>
    </form>
</section>

<?php
require 'footer.php';

?>