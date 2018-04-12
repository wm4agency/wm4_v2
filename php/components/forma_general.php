<form id="contactform">
    <fieldset>
        <input type=text name="nombre" placeholder="nombre completo" required>
        <input type=text name="empresa" placeholder="compañía/dependencia" required>
        <input type=text name="ciudad" placeholder="ciudad" required>
        <input type=email name="correo" placeholder="correo electrónico" required>
        <input type=tel name="telefono" placeholder="teléfono de contacto" required>
        <select name="seleccion" placeholder="requerimiento" required>
            <option>Marketing Digtal</option>
            <option>Marketing Político</option>
            <option>Marketing Deportivo</option>
        </select>
        <select name="intención" placeholder="motivo del contacto">
            <option>contratar un servicio</option>
            <option>rfp / solicitar cotización</option>
            <option>solicitar información</option>
            <option>general</option>
        </select>
        <select name="grado" placeholder="lapso para tomar decisión" required>
            <option>de inmediato</option>
            <option>éste mes</option>
            <option>próximos 3 meses</option>
            <option>no definido</option>
        </select>
        <input type=text name="presupuesto" placeholder="presupuesto disponible">
        <textarea placeholder="comentarios"></textarea>
        <input id="send" type="button" value="Enviar" onClick="return check_values();">
    </fieldset>
</form>