$(document).ready(function($){
    cycle();
    pagepilingInit();
    modalInit();
    slideoutInit();
});
                  
                  
//$(window).on("load resize",function(e) {
//    var more = document.getElementById("js-centered-more");
//
//    if ($(more).length > 0) {
//        var windowWidth = $(window).width();
//        var moreLeftSideToPageLeftSide = $(more).offset().left;
//        var moreLeftSideToPageRightSide = windowWidth - moreLeftSideToPageLeftSide;
//
//        if (moreLeftSideToPageRightSide < 330) {
//            $("#js-centered-more .submenu .submenu").removeClass("fly-out-right");
//            $("#js-centered-more .submenu .submenu").addClass("fly-out-left");
//        }
//
//        if (moreLeftSideToPageRightSide > 330) {
//            $("#js-centered-more .submenu .submenu").removeClass("fly-out-left");
//            $("#js-centered-more .submenu .submenu").addClass("fly-out-right");
//        }
//    }
//
//    var menuToggle = $("#js-centered-navigation-mobile-menu").unbind();
//    $("#js-centered-navigation-menu").removeClass("show");
//
//    menuToggle.on("click", function(e) {
//        e.preventDefault();
//        $("#js-centered-navigation-menu").slideToggle(function(){
//            if($("#js-centered-navigation-menu").is(":hidden")) {
//                $("#js-centered-navigation-menu").removeAttr("style");
//            }
//        });
//    });
//}); 

// Get the modal
var modal = document.getElementById('modal_contacto');

// Get the button that opens the modal
var btn = document.getElementById("contacto_head");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

function modalInit(){
    if(!modal || modal == null) return;
    
    // When the user clicks on the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}
 
function pagepilingInit(){
    var e = document.getElementById("pagepiling");
    if(!e || e == null) return;
    
    $('html').addClass('pagepiled');
    
    $('#pagepiling').pagepiling({
        direction: 'horizontal',
        verticalCentered: true,
        loopBottom: true,

        afterRender: function(){
            //            alert("The resulting DOM structure is ready");
        },

        anchors: ['welcome-splash', 'mkt-digital', 'mkt-politico', 'mkt-deportivo'],

        afterLoad: function(anchorLink){
            switch (anchorLink){
                case 'mkt-digital':
                    var lFlapContent = "<p>Ofrecemos soluciones para que nuestros clientes incrementen su presencia online, aumenten su credibilidad, hagan negocios en internet, mejoren su imagen y como resultado: obtengan mayor ROI</p>";

                    var rFlapContent ="<ul class='hex'>\n"+
                        "<li>Análisis y estrategia</li>\n"+
                        "<li>Diseño y desarrollo</li>\n"+
                        "<li>Consultoría en Marketing y Comunicación</li>\n"+
                        "<li>Monitoreo y análisis</li>\n"+
                        "<li>Posicionamiento Web</li>\n"+
                        "<li>Content Marketing</li>\n"+
                        "<li>Social Marketing</li>\n"+
                        "<li>Producción de contenido</li>\n"+
                        "</ul>";
                    var selected = $('#u_mkt_digital');
                    break;

                case 'mkt-politico':
                    var lFlapContent = "<p>Ofrecemos consultoría en marketing y comunicación política</p>";

                    var rFlapContent ="<ul class='hex'>\n"+
                        "<li>Estrategia de comunicación</li>\n"+
                        "<li>Estrategia de comunicación digital</li>\n"+
                        "<li>Finanzas públicas y transparencia</li>\n"+
                        "<li>Jurídico electoral</li>\n"+
                        "</ul>";
                    var selected = $('#u_mkt_politico');
                    break;

                case 'mkt-deportivo':
                    var lFlapContent = "<p>Construimos proyectos específicos que responden a sus necesidades, cualesquiera que sean.</p>";

                    var rFlapContent ="<ul class='hex'>\n"+
                        "<li>Estrategias 360</li>\n"+
                        "<li>Diseño y desarrollo Web</li>\n"+
                        "<li>Consultoría de Marketing y Comunicación</li>\n"+
                        "<li>Web | Social Analytics</li>\n"+
                        "<li>Construcción y reputación de marca</li>\n"+
                        "<li>Content Marketing</li>\n"+
                        "<li>Social Media Marketing</li>\n"+
                        "</ul>";
                    var selected = $('#u_mkt_deportivo');
                    break;

                default:
                    var lFlapContent ="&nbsp;";
                    var rFlapContent ="&nbsp;";
                    break;
                              }
            $('#left-flap').html(lFlapContent);
            $('#right-flap').html(rFlapContent);
            if(selected){
                console.log(selected);
                $('.unidades').removeClass('selected');
                selected.addClass('selected');
            }else{
                $('.unidades').removeClass('selected');
            };
        }
    });
}

function cycle(){
    var mensaje = [
        'Marketing con sentido',
        'Marketing estratégico',
        'Marketing por objetivos',
        'Marketing con resultados',
        'Analíticos y optimización',
        'Publicidad con ROI medido'
    ];
    
    var x = 0;
    loopmsg();
    setInterval(loopmsg, 3500);
    // cycles through different salutations
    function loopmsg(){
        $('#cycling').fadeOut(1000, function(){
            $(this).text(mensaje[x + 1]);
            $(this).fadeIn(1000);
            x++;

            // resets x
            if (x > mensaje.length - 2) {
                x = -1;
            }
        }
                       )};
}; 

function binds(){
    $('#anchor').on('click',function(e){
        //e.preventDefault();
    });
}

function slideoutInit(){
    var e = document.getElementById("slideout");
    if(!e || e == null) return;
    
    var triggers = document.querySelectorAll('.slideout-trigger');
    var panel =  document.getElementById('slideout');
    var menus = [];
    var slideout = [];
    
    for (var i = 0, len = triggers.length; i < len; i++){
        var menuid = triggers[i].getAttribute('data-slideout-menu');
        var menu = document.getElementById(menuid);
        var arrowid = '#'+menuid+' > .arrow';
        var toggleElement = $(arrowid);
        slideout[i] = new Slideout({
            'panel': panel,
            'menu': menu,
            'padding': 400,
            'tolerance': 70,
            'easing' : 'ease',
            'duration' : 300
        });
        menu.classList.remove("hidden");
        triggers[i].addEventListener('click', bindClick(i));
        toggleElement[0].addEventListener('click', bindClick(i));
    }
    function bindClick(i) {
        return function(){
            slideout[i].menu.style.zIndex = '0';
            slideout[i].toggle();
            
            slideout[i].on('close', function() {
                slideout[i].menu.style.zIndex = '-1';
            });
                    
            
            
            /*var fixed = document.querySelector('.centered-navigation');

            slideout[i].on('translate', function(translated) {
                fixed.style.transform = 'translateX(' + translated + 'px)';
            });

            slideout[i].on('beforeopen', function () {
                fixed.style.transition = 'transform 300ms ease';
                fixed.style.transform = 'translateX(256px)';
            });

            slideout[i].on('beforeclose', function () {
                fixed.style.transition = 'transform 300ms ease';
                fixed.style.transform = 'translateX(0px)';
            });

            slideout[i].on('open', function () {
                fixed.style.transition = '';
            });

            slideout[i].on('close', function () {
                fixed.style.transition = '';
            });
            */
        };
    }
}

