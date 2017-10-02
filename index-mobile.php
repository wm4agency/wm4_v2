<?php  
$title = 'WM4'; 
$localScripts = 'slideout';
$header = 'full'; 
include 'header-mobile.php'; 
?>

<main id="home" class="mobile">
    <!--/.container-->
    <div class="bloque_wrapper">
        <section class="bloque">
            <div class="row">
                <figure class="main_logo">
                    <img src="img/wm4.png" class="modal-trigger">
                </figure>
            </div>
            <div id="cycle" class="row">
                <h3 id="cycling">&nbsp;</h3>
            </div>
        </section>
    </div>
</main>

<section id="unidades_negocio">
    <div class="row section-header">Hacemos marketing especializado</div>
    <div id="unidades"  >
        <article class="unidades" id="digital">
            <h1 class="slideout-trigger" data-slideout-menu="mkt-digital">Di<br>gi<br>tal</h1>
        </article>
        <article id="politico" class="unidades">
            <h1 class="slideout-trigger" data-slideout-menu="mkt-politico">Po<br>lí<br>ti<br>co</h1>
        </article>
        <article id="deportivo" class="omega unidades">
            <h1 class="slideout-trigger" data-slideout-menu="mkt-deportivo">De<br>por<br>ti<br>vo</h1>
        </article>
    </div>
</section>
    
<!-- The Modal -->
<div id="modal_contacto" class="modal">
    <!-- Modal content -->
    <div id="#contactWrapper" class="modal-content">
        <span class="close">&times;</span>
        <form id="contactform">
            <fieldset>
                <span><input id="nombre" type="text" name="nombre" placeholder="Nombre" class="validar"></span>
                <span><input id="empresa" type="text" name="empresa" placeholder="Empresa" class="validar"></span>
                <span><input id="ciudad" type="text" name="ciudad" placeholder="Ciudad" class="validar"></span>
                <span><input id="email" type="email" name="email" placeholder="Correo electrónico" class="validar"></span>
                <span><input id="telefono" type="text" name="telefono" placeholder="Teléfono" class="validar"></span>
                <span>
                    <select id="seleccion" name="seleccion" class="validar">
                        <option value="0">Servicio de interés</option>
                        <option value="Marketing Digital">Marketing Digital</option>
                        <option value="Marketing Político">Marketing Político</option>
                        <option value="Marketing Deportivo">Marketing Deportivo</option>
                    </select>
                </span>
                <span>
                    <select id="intencion" name="intencion" class="validar">
                        <option value="0">Motivo del contacto</option>
                        <option value="Nueva marca">Nueva marca</option>
                        <option value="Nuevo proyecto">Nuevo proyecto</option>
                        <option value="Pitch">Pitch</option>
                        <option value="Cotización">Cotizar</option>
                    </select>
                </span>
                <span>
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
            <input id="send" type="button" value="Enviar" onClick="return check_values();">
        </form>
        <div id="confirmation"></div>
    </div>

</div>

<?php include "footer.php"; ?>