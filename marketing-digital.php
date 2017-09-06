<?php  
    $title = 'Marketing Digital'; 
    $header = 'minimal'; 
    $role = 'portada-seccion'; 
    include 'header.php'; 
?>

<main class="<?php echo $role; ?> container row">
    <h1 class="span-12">marketing <br> digital</h1>
    <p role="definition" class="span-5">Desarrollamos e implementamos estrategias que permiten al cliente concretar objetivos de negocio a través de internet, analizando y optimizando constantemente para entregar resultados tangibles que se traducen en oportunidades de ingreso para el cliente</p>
    <div class="span-7 omega">
        <ul class="hex span-6">
            <li>Análisis y estrategia</li>
            <li>Diseño y desarrollo</li>
            <li>Consultoría en Marketing y Comunicación</li>
            <li>Monitoreo y análisis</li>
        </ul>
        <ul class="hex span-6">
            <li>Posicionamiento Web</li>
            <li>Content Marketing</li>
            <li>Social Marketing</li>
            <li>Producción de contenido</li>
        </ul>
    </div>
</main>
<section id="stats" class="<?php echo $role; ?> container row">
    <h1 class="span-12">Resultados Medibles</h1>
    <ul class="span-12 stats">
        <li>98<span>Items</span></li>
        <li>298<span>Things</span></li>
        <li>923<span>Objects</span></li>
        <li>98<span>More</span></li>
    </ul>
</section>
<section id="portfolio" class="<?php echo $role; ?> fullwidth">
    <h2>Algunos de nuestros proyectos mas recientes</h2>
    <div class="grid-items-lines">
        <a href="javascript:void(0)" class="grid-item" style="background-image: url(img/stock/beach-beverage-caribbean-cocktail-68672.jpeg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/garden_flowers.jpg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/lake_dock.jpeg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/pexels-photo-112372.jpeg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/pexels-photo-459320.jpeg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/pexels-photo-112372.jpeg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/subway-escalator.jpg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item"  style="background-image: url(img/stock/beach-beverage-caribbean-cocktail-68672.jpeg)">
            <article>
                <h1>Proyecto</h1>
                <p>Breve descripción</p>
            </article>
        </a>
        <div class="right-cover"></div>
        <div class="bottom-cover"></div>
    </div>
</section>
<section id="contacto" class="<?php echo $role; ?> container row">
    <div class="wrapper">
        <div class="span-4">
            <h1>contacto</h1>
        </div>
        <form id="contactform" class="span-8 omega">
            <input type=text placeholder="nombre">
            <input type=text placeholder="empresa">
            <input type=email placeholder="correo">
            <input type=tel placeholder="teléfono">
            <input type=text placeholder="asunto">
            <textarea placeholder="comentarios"></textarea>
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

<?php 
    $footer="minimal";
    include("footer.php"); 
?>