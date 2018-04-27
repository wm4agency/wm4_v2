<?php  
$title = 'Marketing Político'; 
$localclass= 'mkt_p';
$localScripts = array("odometer","photoswipe","unslider");
$header = 'full'; 
$role = 'portada-seccion'; 
$color_space = "#cdc200";
include 'header-desktop.php'; 
?>

<section id="hero" class="unslider" data-unslider_options='{"speed":1000,"autoplay":true,"delay":12000,"animation":"horizontal","selectors":{"container":"main","slides":"article"},"infinite":true}'>
   <hgroup class="">
       <meta itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" content="WM4" />
       <h1 itemprop="serviceType" itemprop="name" class="container animated fadeInLeft">Marketing<br> Político</h1>
    </hgroup>
    <main>
        <article style="background-image:url(<?php $root;?>'img/stock/blur-camera-crowd-57715.jpg')">
            <div class="shading">
                <div class="container slider-wrapper">
                    <div class="slider-content animated fadeInLeft">
                        <h2>Vocería, posicionamiento y comunicación</h2>
                        <p>Construimos estrategias de posicionamiento y comunicación que logran impacto</p>
                    </div>
                </div>
            </div>
         </article>
        <article style="background-image:url(<?php $root;?>'img/stock/architect-composition-data-313691.jpg')">
            <div class="shading">
                <div class="container slider-wrapper ">
                    <div class="slider-content animated fadeInLeft">
                        <h2>Estrategia digital</h2>
                        <p>Diseñamos el proyecto adecuado para llegar al público correcto</p>
                    </div>
                </div>
            </div>
        </article>
        <article style="background-image:url(<?php $root;?>'img/stock/adult-brand-exercise-806626.jpg')">
            <div class="shading">
                <div class="container slider-wrapper">
                    <div class="slider-content animated fadeInLeft">
                        <h2>Desarrollo de marca</h2>
                        <p>Construimos y desarrollamos identidad que provoca fidelidad</p>
                    </div>
                </div>
            </div>
        </article>
    </main>
</section>
<section id="main" class="row precontacto">
    <article itemscope itemtype="http://schema.org/Service" class="container">
        <meta itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" content="WM4" />
        <summary id="intro" class="span-5 animated fadeIn">
            Construimos y desarrollamos una presencia pública estructurada que la audiencia puede reconocer y valorar, con las que puede relacionarse positivamente. Operamos canales y medios digitales para construir reputación con sentido público. </summary>
        <div id="servicios" class="span-7 omega animated fadeIn content">
            <dl itemprop="hasOfferCatalog" itemscope itemtype="http://schema.org/OfferCatalog" class="content">
                <h3 class="hexatitle centered">Nuestros servicios</h3>
                <div class="span-6">
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Consultoría en vocería y manejo de crisis</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Gabinete de comunicación estratégica</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Comunicación digital</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Posicionamiento y relevancia</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Identidad y marca</dt>
                </div>
                <div class="span-6 omega">
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Social media optimization</dt><dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Soporte al desarrollo territorial</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Diseño y producción</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Estrategia de contenidos</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Campañas y pautas digitales</dt>
                    <dt itemprop="itemListElement" itemscope itemtype="http://schema.org/OfferCatalog">Web | Social Analytics</dt>
                </div>
            </dl>
        </div>
        <aside class="span-5"><a href="#contacto" class="linktext" data-destination="contacto">Solicitar información</a></aside> 
    </article>      
</section>
<section id="contacto" name="contacto" class="<?php echo $role; ?> row">
    <div class="container">
        <span class="span-3">&nbsp;</span>
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