<?php  
    $title = 'Marketing Digital'; 
    $localclass= 'mkt_d';
    $localScripts = array("odometer","photoswipe");
    $header = 'minimal'; 
    $role = 'portada-seccion'; 
    $color_space = "#1797cd ";
    include 'header-desktop.php'; 
?>

<main class="row">
    <article itemscope itemtype="http://schema.org/Service" class="container">
        <meta itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" content="WM4" />
        <h1 itemprop="serviceType" itemprop="name" class="span-12">Marketing<br> Digital</h1>
        <summary id="intro" class="span-5">
            Desarrollamos e implementamos estrategias que permiten al cliente concretar objetivos de negocio a través de internet, analizando y optimizando constantemente para entregar resultados tangibles que se traducen en oportunidades de ingreso para el cliente
        </summary>
        <dl itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog" id="servicios" class="span-7 omega">
            <h3 class="hexa_centered">Nuestros servicios</h3>
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
        <aside class="span-5"><span class="linktext">Solicitar información</span></aside> 
    </article>      
</main>
<section id="stats" class="<?php echo $role; ?> row prearrow">
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
<section id="portfolio" class="<?php echo $role; ?> fullwidth">
    <h2><strong>Portafolios</strong><br />Algunos de nuestros proyectos mas recientes</h2>
    <div class="grid-items-lines">
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/bahia/12a.jpg)" data-sourcedir="portafolio/bahia">
            <article>
                <h1>Bahia Principe</h1>
                <p>Desarrollo de contenido</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/arecas/19.jpg)" data-sourcedir="portafolio/arecas">
            <article>
                <h1>Arecas</h1>
                <p>Social Media</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/fese/FB-Martes30.jpeg)" data-sourcedir="portafolio/fese">
            <article>
                <h1>FESE</h1>
                <p>Producción de contenidos</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/merlos/chf.png)" data-sourcedir="portafolio/merlos">
            <article>
                <h1>Merlos</h1>
                <p>Social Media</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/maha/maha_promo_bimestre.jpeg)" data-sourcedir="portafolio/maha">
            <article>
                <h1>Maha</h1>
                <p>Operación digital</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/maha_squash/006.png)" data-sourcedir="portafolio/maha_squash">
            <article>
                <h1>Maha Squash</h1>
                <p>Social Media</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/eldiez/FB-Corte-tuco.jpg)" data-sourcedir="portafolio/eldiez">
            <article>
                <h1>El Diez</h1>
                <p>Operación y Contenidos Sociales</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/tuinforma/TuInforma-01.JPG)" data-sourcedir="portafolio/tuinforma">
            <article>
                <h1>Tu Informa</h1>
                <p>Arquitectura y estrategia</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/bahia_landings/BahiaPrincipe_landings.jpg)" data-sourcedir="portafolio/bahia_landings">
            <article>
                <h1>Campaña Performance</h1>
                <p>Ecosistema de landings y campañas para generar prospectos</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/grill/grill-home.png)" data-sourcedir="portafolio/grill">
            <article>
                <h1>e-Commerce</h1>
                <p>Sitio transaccional para Grill Home & More</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/marina/01-marina_website_home.png)" data-sourcedir="portafolio/marina">
            <article>
                <h1>Presencia digital</h1>
                <p>Propiedad principal de Marina Town Center en internet.</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item"  style="background-image: url(img/portafolio/ccc/01-cancun_country_club-home.png)"  data-sourcedir="portafolio/ccc">
            <article>
                <h1>Punto de contacto</h1>
                <p>Plataforma digital del Cancún Country Club, orientado a conversión</p>
            </article>
        </a>
    </div>
</section>
<section id="clientes" class="postarrow precontacto">
   <div class="container">
       <h1>Currículo</h1>
       <h2>Algunos de nuestros clientes más destacados</h2>
       <ul>
           <span>
           <li><figure><img src="img/logos/ingressio.svg"> <figcaption>ingresio</figcaption></figure></li>
           <li><figure><img src="img/logos/gbg.svg"> <figcaption>gbg</figcaption></figure></li>
               <li><figure><img src="img/logos/anuies.svg"><figcaption>anuies</figcaption></figure></li>
               <li><figure><img src="img/logos/FESE.svg"><figcaption>fese</figcaption></figure></li>
               <li><figure><img src="img/logos/toyota_fs.svg"><figcaption>toyota</figcaption></figure></li>
               <li><figure><img src="img/logos/maha.svg"><figcaption>maha</figcaption></figure></li>
           </span>
           <span>
               <li><figure><img src="img/logos/Reylaz.svg"><figcaption>reylaz</figcaption></figure></li>
               <li><figure><img src="img/logos/pcmarina.svg"><figcaption>puerto</figcaption></figure></li>
               <li><figure><img src="img/logos/coca.svg"><figcaption>coca</figcaption></figure></li>
               <li><figure><img src="img/logos/pepsi.svg"><figcaption>pepsi</figcaption></figure></li>
               <li><figure><img src="img/logos/BahiaPrincipeRG.svg"><figcaption>bahia</figcaption></figure></li>
           </span>
           <span>
               <li><figure><img src="img/logos/lacavi.svg"><figcaption>lacavi</figcaption></figure></li>
               <li><figure><img src="img/logos/arecas.svg"><figcaption>arecas</figcaption></figure></li>
               <li><figure><img src="img/logos/merlos.svg"><figcaption>merlos</figcaption></figure></li>
           </span>
       </ul>
    </div>
</section>
<section id="contacto" class="<?php echo $role; ?> row">
    <div class="container">
        <span class="span-4">&nbsp;</span>
        <form id="contactform" class="span-4">
            <h1 class="hexa_centered sub">Contáctanos</h1>
            <h2>Transforma hoy tu estrategia digital</h2>
            <input type=text placeholder="nombre">
            <input type=text placeholder="empresa">
            <input type=email placeholder="correo">
            <input type=tel placeholder="teléfono">
            <input type=text placeholder="asunto">
            <textarea placeholder="comentarios"></textarea>
        </form>
    </div>
</section>
<section class="postcontacto"><div class="container"><h3>creamos estrategias | entregamos resultados</h3></div></section>

<?php 
    $footer="minimal";
    require_once("php/components/photoswipe.php");
    include("footer.php"); 
?>