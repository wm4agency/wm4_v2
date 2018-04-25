<form id="contactform">
    <fieldset>
        <input type=text id="nombre" name="nombre" placeholder="nombre completo" class="required">
        <input type=text id="empresa" name="empresa" placeholder="compañía/dependencia" class="required">
        <input type=text id="ciudad" name="ciudad" placeholder="ciudad" class="required">
        <input type=email id="correo" name="correo" placeholder="correo electrónico" class="required">
        <input type=tel id="telefono" name="telefono" placeholder="teléfono de contacto" class="required">
        <?php 
            switch ($localclass){
                case "mkt_d":
                    echo "<input type='hidden' id='seleccion' name='seleccion' value='Marketing Digital'>";
                    break;
                case "mkt_p":
                    echo "<input type='hidden' id='seleccion' name='seleccion' value='Marketing Político'>";
                    break;
                case "mkt_s":
                    echo "<input type='hidden' id='seleccion' name='seleccion' value='Marketing Deportivo'>";
                    break;
                default:
                    echo "<div class='selectwrap'>
                        <select id='seleccion' name='seleccion' class='required'>
                            <option value=''>Servicio de su interés</option>
                            <option>Marketing Digtal</option>
                            <option>Marketing Político</option>
                            <option>Marketing Deportivo</option>
                        </select>
                    </div>";
                    break;
            }
        
        ?>
        <div class='selectwrap'><select id="intencion"  name="intencion" class="required">
            <option value="">motivo de su contacto</option>
            <option>contratar un servicio</option>
            <option>rfp / solicitar cotización</option>
            <option>solicitar información</option>
            <option>general</option>
            </select></div>
        <div class='selectwrap'><select id="grado" name="grado" class="required">
            <option value="">plazo para decidir</option>
            <option>de inmediato</option>
            <option>éste mes</option>
            <option>próximos 3 meses</option>
            <option>no definido</option>
            </select></div>
        <input type=text id="presupuesto" name="presupuesto" placeholder="presupuesto disponible">
        <textarea id="mensaje" name="mensaje" placeholder="comentarios"></textarea>
<!--        <input id="send" type="button" value="Enviar" onClick="return check_values();">-->
        <input id="send" type="button" value="Enviar" class="sendform">
        <input type="hidden" id="cat" name="cat" value="general">
    </fieldset>
</form>