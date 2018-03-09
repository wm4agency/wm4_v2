<?php  
    $title = 'Marketing Digital'; 
    $localclass= 'mkt_d';
    $localScripts = array("slideout","odometer");
    $header = 'minimal'; 
    $role = 'portada-seccion'; 
    $color_space = "#1797cd ";
    include 'header-desktop.php'; 
?>

<main class="container row">
    <h1 class="span-12">marketing <br> digital</h1>
    <summary id="intro" class="span-5">
        <p role="definition" >Desarrollamos e implementamos estrategias que permiten al cliente concretar objetivos de negocio a través de internet, analizando y optimizando constantemente para entregar resultados tangibles que se traducen en oportunidades de ingreso para el cliente</p>
        <span class="linktext">Solicitar información</span>       
    </summary>
    <section id="servicios" class="span-7 omega">
        <ul class="span-6">
            <li>Análisis y estrategia</li>
            <li>Diseño y desarrollo</li>
            <li>Consultoría en Marketing y Comunicación</li>
            <li>Monitoreo y análisis</li>
        </ul>
        <ul class="span-6 omega">
            <li>Posicionamiento Web</li>
            <li>Content Marketing</li>
            <li>Social Marketing</li>
            <li>Producción de contenido</li>
        </ul>
    </section>
</main>
<section id="stats" class="<?php echo $role; ?> row">
   <div class="container">
       <h1 class="span-12">estrategias y acciones que generan resultados</h1>
       <ul class="span-12 stats">
           <li class="span-3"><strong class="odometer" data-odo="120">0</strong><br />millones<br /><span class="subtitle"> de impresiones</span></li> 
           <li class="span-3"><strong class="odometer" data-odo="490">0</strong><br />mil<br /><span> interacciones</span></li> 
           <li class="span-3"><strong class="odometer" data-odo="5.4">0</strong><br />millones<br /><span> impactos (reach)</span></li> 
           <li class="span-3 omega featured">$<strong class="odometer" data-odo="79.8">0</strong><br />millones<span>ROI en campañas</span></li> 
       </ul>
    </div>
</section>
<section id="portfolio" class="<?php echo $role; ?> fullwidth precontacto">
    <h2><strong>Portafolios</strong><br />Algunos de nuestros proyectos mas recientes</h2>
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
<section id="contacto" class="<?php echo $role; ?> row">
    <div class="container">
        <span class="span-2">&nbsp;</span>
        <form id="contactform" class="span-8">
            <h1>contacto</h1>
            <input type=text placeholder="nombre">
            <input type=text placeholder="empresa">
            <input type=email placeholder="correo">
            <input type=tel placeholder="teléfono">
            <input type=text placeholder="asunto">
            <textarea placeholder="comentarios"></textarea>
        </form>
    </div>
</section>
<section class="postcontacto"><h3>creamos estrategias | entregamos resultados</h3></section>

<?php 
    $footer="minimal";
    include("footer.php"); 
?>