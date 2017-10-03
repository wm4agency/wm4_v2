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
    <h1 class="row section-header">Hacemos marketing especializado</h1>
    <a href="marketing-digital.php">
        <article class="unidades" id="digital">
            <h1 class="slideout-trigger" data-slideout-menu="mkt-digital">Di<br>gi<br>tal</h1>
        </article>
    </a>
    <a href="marketing-politico.php">
        <article id="politico" class="unidades">
            <h1 class="slideout-trigger" data-slideout-menu="mkt-politico">Po<br>lí<br>ti<br>co</h1>
        </article>
    </a>
    <a href="marketing-deportivo.php">
        <article id="deportivo" class="omega unidades">
            <h1 class="slideout-trigger" data-slideout-menu="mkt-deportivo">De<br>por<br>ti<br>vo</h1>
        </article>
    </a>
</section>

<section id="mvp" data-context="main value proposition">
    <article>
        <h1>hacemos estrategias</h1>
        <p>Planeamos el trabajo a partir de objetivos de negocio del cliente, operamos bajo procesos ágiles y consistentes, para entregar resultados concretos que contribuyen a la rentabilidad y el desarrollo de la marca, que medimos con herramientas e indicadores adecuados para optimizar constantemente.</p>
    </article>
</section>
    
<section id="valores">
    <h1 class="row section-header">Nos destacan</h1>
    <article style="border-right: 1px solid black; border-bottom: 1px solid black;">
        <div class="article-wrapper">
            <h1>Talento</h1>
            <p>Nuestro equipo está formado por una constelación de individuos con experiencias y capacidades que sobresalen y se complementan.</p>
        </div>
    </article>
    <article style="border-bottom: 1px solid black;">
        <div class="article-wrapper">
            <h1>Eficacia</h1>
            <p>Trabajamos todos los días por construir resultados tangibles en la operación de nuestros clientes, que contribuyen a generar ingreso.</p>
        </div>
    </article>
    <article style="border-right: 1px solid black;">
        <div class="article-wrapper">
            <h1>Pasión</h1>
            <p>Hacemos lo que amamos y amamos lo que hacemos, por eso lo hacemos con el corazón y la cabeza, y eso se nota en los resultados.</p>
        </div>
    </article>
    <article id="last">
        <div class="article-wrapper">
            <h1>Compromiso</h1>
            <p>Nuestro equipo está formado por una constelación de individuos con experiencias y capacidades que sobresalen y se complementan</p>
        </div>
    </article>
</section>

<section id="cta" data-context="call to action">
<h1 class="row section-header">Haz contacto</h1>
</section>

<section id="forma">
    <div class="form-wrapper">
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