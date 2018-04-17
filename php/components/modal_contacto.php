<!-- The Modal -->
<div id="modal_contacto" class="modal">
    <!-- Modal content -->
    <div id="#contactWrapper" class="modal-content">
        <span class="close">&times;</span>
        <form id="contactform" class="column">
            <fieldset>
                <span class="span-12"><input id="nombre" type="text" name="nombre" placeholder="Nombre" class="validar"></span>
                <span class="span-12"><input id="empresa" type="text" name="empresa" placeholder="Empresa" class="validar"></span>
                <span class="span-12"><input id="ciudad" type="text" name="ciudad" placeholder="Ciudad" class="validar"></span>
                <span class="span-12"><input id="email" type="email" name="email" placeholder="Correo electrónico" class="validar"></span>
                <span class="span-12"><input id="telefono" type="text" name="telefono" placeholder="Teléfono" class="validar"></span>
                <span class="span-6">
                    <select id="seleccion" name="seleccion" class="validar">
                        <option value="0">Servicio de interés</option>
                        <option value="Marketing Digital">Marketing Digital</option>
                        <option value="Marketing Político">Marketing Político</option>
                        <option value="Marketing Deportivo">Marketing Deportivo</option>
                    </select>
                </span>
                <span class="span-6 omega">
                    <select id="intencion" name="intencion" class="validar">
                        <option value="0">Motivo del contacto</option>
                        <option value="Nueva marca">Nueva marca</option>
                        <option value="Nuevo proyecto">Nuevo proyecto</option>
                        <option value="Pitch">Pitch</option>
                        <option value="Cotización">Cotizar</option>
                    </select>
                </span>
                <span  class="span-12">
                    <select id="grado" name="grado" class="validar">
                        <option value="0">Prioridad del proyecto</option>
                        <option value="Proyecto con presupuesto asignado">Proyecto con presupuesto asignado</option>
                        <option value="Proyecto aprobado con presupuesto por definir">Proyecto aprobado con presupuesto por definir</option>
                        <option value="Cotización para evaluar viabilidad">Cotización para evaluar viabilidad</option>
                        <option value="Información general">Información general</option>
                    </select>
                </span>
                <textarea id="comentarios" name="comentarios" placeholder="Cometarios adicionales"></textarea>
            </fieldset>
<!--            <input id="send" type="button" value="Enviar" onClick="return check_values();">-->
            <input type="button" value="Enviar" class="sendform">
        </form>
        <div id="confirmation"></div>
    </div>

</div>