<?php  
    $title = 'Marketing Político'; 
    $localclass= 'mkt_p';
    $localScripts = array("odometer","photoswipe");
    $header = 'minimal'; 
    $role = 'portada-seccion'; 
    $color_space = "#cdc200";
    include 'header-desktop.php'; 
?>

<section id="main" class="row">
    <article itemscope itemtype="http://schema.org/Service" class="container">
        <meta itemprop="provider" itemscope itemtype="http://schema.org/LocalBusiness" content="WM4" />
        <h1 itemprop="serviceType" itemprop="name" class="span-12 animated fadeInLeft">Marketing<br> Político</h1>
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
<section id="stats" class="<?php echo $role; ?> row prearrow">
   <div class="container">
       <h1 class="span-12">estrategias y acciones que generan resultados</h1>
       <ul class="span-12 stats">
           <li class="span-3 animated fadeInDown"><strong class="odometer" data-odo="120">0</strong><br />millones<br /><span class="subtitle"> de impresiones</span></li> 
           <li class="span-3 animated fadeInDown"><strong class="odometer" data-odo="490">0</strong><br />mil<br /><span> interacciones</span></li> 
           <li class="span-3 animated fadeInDown"><strong class="odometer" data-odo="5.4">0</strong><br />millones<br /><span> impactos (reach)</span></li> 
           <li class="span-3 omega featured animated fadeInDown">$<strong class="odometer" data-odo="79.8">0</strong><br />millones<span>ROI en campañas</span></li> 
       </ul>
    </div>
</section>
<section id="portfolio" class="<?php echo $role; ?> fullwidth">
    <div class="container">
        <h1 class="hexatitle right sub">Portafolios</h1>
        <h2>Algunos de nuestros proyectos mas recientes</h2>
    </div>
    <div class="grid-items-lines">
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/politico/nams_informe/NAMS-evento_RD.png)" data-sourcedir="portafolio/politico/nams_informe">
            <article>
                <h1>Informe de Actividades</h1>
                <p>NAMS, Diputado Federal</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/politico/enrique_serrano/vicky_serrano-sitio-valores.JPG)" data-sourcedir="portafolio/politico/enrique_serrano">
            <article>
                <h1>Campaña paralela</h1>
                <p>ES, Candidatura Gobierno del Estado</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/politico/crm/crm_portadas_finales_enero_1_Face.png)" data-sourcedir="portafolio/politico/crm">
            <article>
                <h1>Contenido RRSS</h1>
                <p>CRM, Presidente Ejecutivo del Partido</p>
            </article>
        </a>
        <a href="javascript:void(0)" class="grid-item portfolio-item" style="background-image: url(img/portafolio/politico/candelaria/CC_ps_1.jpg)" data-sourcedir="portafolio/politico/candelaria">
            <article>
                <h1>Contenido RRSS</h1>
                <p>CC, Candidato</p>
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
<section id="contacto" name="contacto" class="<?php echo $role; ?> row">
    <div class="container">
        <span class="span-4">&nbsp;</span>
        <div class="span-4">
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