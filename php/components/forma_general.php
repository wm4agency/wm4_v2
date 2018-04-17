<form id="contactform">
    <fieldset>
        <input type=text id="nombre" name="nombre" placeholder="nombre completo" required>
        <input type=text id="empresa" name="empresa" placeholder="compañía/dependencia" required>
        <input type=text id="ciudad" name="ciudad" placeholder="ciudad" required>
        <input type=email id="correo" name="correo" placeholder="correo electrónico" required>
        <input type=tel id="telefono" name="telefono" placeholder="teléfono de contacto" required>
        <select id="seleccion" name="seleccion" placeholder="requerimiento" required>
            <option value="">seleccione una opción</option>
            <option>Marketing Digtal</option>
            <option>Marketing Político</option>
            <option>Marketing Deportivo</option>
        </select>
        <select id="intencion"  name="intencion" placeholder="motivo del contacto">
            <option value="">seleccione una opción</option>
            <option>contratar un servicio</option>
            <option>rfp / solicitar cotización</option>
            <option>solicitar información</option>
            <option>general</option>
        </select>
        <select id="grado" name="grado" placeholder="lapso para tomar decisión" required>
            <option value="0">seleccione una opción</option>
            <option>de inmediato</option>
            <option>éste mes</option>
            <option>próximos 3 meses</option>
            <option>no definido</option>
        </select>
        <input type=text id="presupuesto" name="presupuesto" placeholder="presupuesto disponible">
        <textarea id="mensaje" name="mensaje" placeholder="comentarios"></textarea>
<!--        <input id="send" type="button" value="Enviar" onClick="return check_values();">-->
        <input type="button" value="Enviar" class="sendform">
    </fieldset>
</form>