<?php  
$title = 'WM4'; 
$localScripts = 'slideout';
$header = 'full'; 
include 'header-mobile.php'; 
?>

<section id="slideout">
    <main id="home" class="mobile">
        <header class="centered-navigation" role="banner">
            <div class="centered-navigation-wrapper">
                <nav role="navigation">
                    <ul id="js-centered-navigation-menu" class="centered-navigation-menu show">
                        <li class="nav-link">
                            <a href="https://www.google.com.mx/maps/place/Vito+Alessio+Robles+101,+Agr%C3%ADcola,+Chimalistac,+01030+Ciudad+de+M%C3%A9xico,+CDMX/@19.3511402,-99.1850127,17z/data=!4m5!3m4!1s0x85d1fff0e0e33ca7:0x4355e17e0a3580dd!8m2!3d19.351135!4d-99.182824?hl=en"><span class="fa fa-map-marker"></span></a>
                        </li>
                        <li class="nav-link"><a href="javascript:void(0)"><span class="fa fa-phone"></span></a></li>
                        <li class="nav-link"><a href="mailto:contacto@wm4.mx"><span class="fa fa-envelope"></span></a></li>
                        <li class="nav-link logo">
                            <a class="logo">
                                <div id="contacto_head"><span>contacto</span></div>
                            </a>
                        </li>
                        <li class="nav-link"><a href="https://twitter.com/wm4mx"><span class="fa fa-twitter"></span></a></li>
                        <li class="nav-link"><a href="https://www.facebook.com/webmedia4/?fref=ts"><span class="fa fa-facebook"></span></a></li>
                        <li class="nav-link"><a href="https://www.instagram.com/wm4agency/"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </nav>
            </div>
        </header><!--/.container-->
        
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
                        <article class="span-4 unidades">
                            <h1 class="slideout-trigger" data-slideout-menu="mkt-digital">Marketing<br /> Digital</h1>
                        </article>
                        <article class="span-4 unidades">
                            <h1 class="slideout-trigger" data-slideout-menu="mkt-politico">Marketing<br /> Político</h1>
                        </article>
                        <article class="span-4 omega unidades">
                            <h1 class="slideout-trigger" data-slideout-menu="mkt-deportivo">Marketing<br /> Deportivo</h1>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </main>
</section>

<section id="mkt-digital" class="hidden">
    <span class="arrow right"></span>
    <h1>Marketing<br>Digital</h1>
</section>
<section id="mkt-politico" class="hidden">
    <span class="arrow right"></span>
    <h1>Marketing<br>Político</h1></section>
<section id="mkt-deportivo" class="hidden">
    <span class="arrow right"></span>
    <h1>Marketing<br>Deportivo</h1></section>
    
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