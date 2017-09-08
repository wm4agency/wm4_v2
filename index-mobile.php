<?php  
$title = 'WM4'; 
$localScripts = 'pagepiling';
$header = 'full'; 
include 'header-mobile.php'; 
?>

<section id="pagepiling">
    <main id="home">
        <div class="span-3 flap l">
            <div class="bloque_wrapper">
                <div id="left-flap" class="bloque">&nbsp;</div>
            </div>
        </div>
        <div class="span-6">
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
                    <div id="unidades">
                        <div class="row">
                            <article class="span-4 unidades tooltip-item">
                                <a href="marketing-digital.php"><h1>Marketing<br /> Digital</h1></a>
                                <div class="tooltip">
                                    <p>Ayudamos a las marcas a cumplir objetivos de negocio en internet</p>
                                </div>
                            </article>
                            <article class="span-4 unidades tooltip-item">
                                <h1>Marketing<br /> Político</h1>
                                <div class="tooltip">
                                    <p>Trabajamos con figuras y entidades para incrementar su presencia pública y operaciones digitales</p>
                                </div>
                            </article>
                            <article class="span-4 omega unidades tooltip-item">
                                <h1>Marketing<br /> Digital</h1>
                                <div class="tooltip">
                                    <p>Desarrollamos grandes marcas para grandes equipos</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="span-3 flap r omega">
            <div class="bloque_wrapper">
                <div id="right-flap" class="bloque">&nbsp;</div>
            </div>
        </div>
    </main>
   
    <div id="welcome-splash" class="section" style="background-color:white;"></div>
    <div id="mkt-digital" class="section" style="background-image:url(img/stock/business-mobile-devices.jpeg)"></div>
    <div id="mkt-politico" class="section" style="background-image:url(img/stock/bow-tie-businessman-fashion-man.jpg)"></div>
    <div id="mkt-deportivo" class="section" style="background-image:url(img/stock/baseball-stadium-top.jpeg)"></div>
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