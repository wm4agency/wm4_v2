<?php  
    $title = 'Marketing Deportivo'; 
    $localScripts = 'slideout';
    $header = 'minimal'; 
    $role = 'portada-seccion'; 
    include 'header-desktop.php'; 
?>

<main class="<?php echo $role; ?> container row">
    <h1 class="span-12">marketing <br> deportivo</h1>
    <p role="definition" class="span-5">Construimos y hacemos crecer marcas y lealtades que encienden pasiones y provocan fidelidad. Desarrollamos comunidades involucradas de seguidores leales que participan y colaboran en la construcción de franquicias exitosas</p>
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
<!--
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
-->


<?php 
    $footer="minimal";
    include("footer.php"); 
?>