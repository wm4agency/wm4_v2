<?php  
    $title = 'Marketing Digital'; 
    $localclass= 'mkt_s';
    $localScripts = array("odometer","photoswipe","unslider");
    $header = 'full'; 
    $role = 'portada-seccion'; 
    $color_space = "#1797cd";
    include 'header-desktop.php'; 
?>
<section id="hero" class="unslider" data-unslider_options='{"speed":1000,"autoplay":true,"delay":12000,"animation":"horizontal","selectors":{"container":"main","slides":"article"},"infinite":true}'>
    <hgroup class="">
        <meta itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" content="WM4" />
        <h1 itemprop="serviceType" itemprop="name" class="container animated fadeInLeft">Marketing<br> Deportivo</h1>
    </hgroup>
    <main>
        <article style="background-image:url(<?php $root;?>'img/portafolio/deportivo/tigres/tigres_manual_detalle.png')">
            <div class="shading">
                <div class="container slider-wrapper">
                    <div class="slider-content animated fadeInLeft">
                        <h2>Branding</h2>
                        <p>Construimos identidad y desarrollamos marcas emocionales y poderosas</p>
                    </div>
                </div>
            </div>
        </article>
        <article style="background-image:url(<?php $root;?>'img/portafolio/deportivo/barbachano/H6.png')">
            <div class="shading">
                <div class="container slider-wrapper ">
                    <div class="slider-content animated fadeInLeft">
                        <h2>Estrategia digital</h2>
                        <p>Construimos comunidades activas y rentables</p>
                    </div>
                </div>
            </div>
        </article>
        <article style="background-image:url(<?php $root;?>'img/stock/cheering-crowd-event-17598.jpg')">
            <div class="shading">
                <div class="container slider-wrapper">
                    <div class="slider-content animated fadeInLeft">
                        <h2>Promoción y patrocinios</h2>
                        <p>Desarrollamos el aparato de negocio de la marca y la acercamos a otras marcas afines</p>
                    </div>
                </div>
            </div>
        </article>
    </main>
</section>
<section id="main" class="row prearrow">
    <article itemscope itemtype="http://schema.org/Service" class="container">
        <summary id="intro" class="span-5 animated fadeIn">
            Desarrollamos e implementamos estrategias que permiten al cliente concretar objetivos de negocio a través de internet, analizando y optimizando constantemente para entregar resultados tangibles que se traducen en oportunidades de ingreso para el cliente
        </summary>
        <dl itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog" id="servicios" class="span-7 omega animated fadeIn">
            <h3 class="hexatitle centered">Nuestros servicios</h3>
            <div class="span-6">
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Análisis y estrategia</dt>
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Diseño y desarrollo</dt>
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Consultoría en Marketing y Comunicación</dt>
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Monitoreo y análisis</dt>
            </div>
            <div class="span-6 omega">
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Posicionamiento Web</dt>
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Content Marketing</dt>
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Social Marketing</dt>
                <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Producción de contenido</dt>
            </div>
        </dl>
        <aside class="span-5"><a href="#contacto" class="linktext" data-destination="contacto">Solicitar información</a></aside> 
    </article>      
</section>
<!-- <section id="stats" class="<?php echo $role; ?> row prearrow">
   <div class="container">
       <h1 class="span-12">estrategias y acciones que generan resultados</h1>
       <ul class="span-12 stats">
           <li class="span-3 animated fadeInDown"><strong class="odometer" data-odo="120">0</strong><br />millones<br /><span class="subtitle"> de impresiones</span></li> 
           <li class="span-3 animated fadeInDown"><strong class="odometer" data-odo="490">0</strong><br />mil<br /><span> interacciones</span></li> 
           <li class="span-3 animated fadeInDown"><strong class="odometer" data-odo="5.4">0</strong><br />millones<br /><span> impactos (reach)</span></li> 
           <li class="span-3 omega featured animated fadeInDown">$<strong class="odometer" data-odo="79.8">0</strong><br />millones<span>ROI en campañas</span></li> 
       </ul>
    </div>
</section>-->
<section id="portfolio" class="<?php echo $role; ?> fullwidth">
    <div class="container">
        <h1 class="hexatitle right sub">Portafolios</h1>
        <h2>Algunos de nuestros proyectos mas recientes</h2>
    </div>
    <div class="grid-items-lines">
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/deportivo/barbachano/H6.png)" data-sourcedir="portafolio/deportivo/barbachano">
            <article>
                <h1>Fernando Barbachano</h1>
                <p>Operación digital</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/deportivo/tigres/toro-ilustrado-insta.jpg)" data-sourcedir="portafolio/deportivo/tigres">
            <article>
                <h1>Tigres de Quintana Roo</h1>
                <p>Marketing, Diseño y Operación digital</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/deportivo/petroleros/sultanes_tigres_insta.jpg)" data-sourcedir="portafolio/deportivo/petroleros">
            <article>
                <h1>Petroleros de Salamanca</h1>
                <p>Operación digital</p>
            </article>
        </a>
    </div>
</section>
<section id="clientes" class="postarrow precontacto">
   <div class="container">
       <h1 class="hexatitle left sub">Currículo</h1>
       <h2>Algunos de nuestros clientes más destacados</h2>
       <ul>
           <span>
           <li><figure><img src="img/logos/carlos_cuadras.svg"> <figcaption>Carlos Cuadras</figcaption></figure></li>
               <li><figure><img src="img/logos/tigres_qroo.svg"> <figcaption>Tigres de Quintana Roo</figcaption></figure></li>
               <li><figure><img src="img/logos/leones_gdl.svg"><figcaption>Leones Negros de la UDG</figcaption></figure></li>
               <li><figure><img src="img/logos/piratas_camp.svg"><figcaption>Piratas de Campeche</figcaption></figure></li>
               <li><figure><img src="img/logos/cimarrones_son.svg"><figcaption>Cimarrones de Sonora FC</figcaption></figure></li>
               <li><figure><img src="img/logos/cafetaleros_tap.svg"><figcaption>Cafetaleros de Tapachula</figcaption></figure></li>
           </span>
           <span>
               <li><figure><img src="img/logos/mineros_zac.svg"><figcaption>Mineros de Zacatecas</figcaption></figure></li>
               <li><figure><img src="img/logos/murcielagos.svg"><figcaption>Murciélagos Fútbol Club</figcaption></figure></li>
           </span>
       </ul>
    </div>
</section>
<section id="contacto" name="contacto" class="<?php echo $role; ?> row">
    <div class="container">
        <div class="span-3">&nbsp;</div>
        <div class="span-6">
            <hgroup>
                <h1 class="hexatitle centered sub">Contáctanos</h1>
                <h2 >Transforma hoy tu estrategia digital</h2>
            </hgroup>
            <?php include "php/components/forma_general.php"; ?>
        </div>
    </div>
</section>
<section id="tagline" class="postcontacto"><div class="container"><h5>creamos estrategias | entregamos resultados</h5></div></section>

<?php 
    $footer="minimal";
    require_once("php/components/photoswipe.php");
    include("footer.php"); 
?>