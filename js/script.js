$(document).ready(function($){
    document.getElementById('preloader')&&$(".se-pre-con").fadeOut("slow");
    
    delegateEvents();
    cycleInit();
    pagepilingInit();
    modalInit();
    //slideoutInit();
    odometerInit();
    getFolderItems();
    unsliderInit();
});
window.onload = function() {
    //document.getElementById('preloader')&&$(".se-pre-con").fadeOut("slow")&&odometerInit();
}          

var pswpElement = document.querySelectorAll('.pswp')[0];
var pswpGalleries = [];

function delegateEvents(){
    document.addEventListener('click', function (event) {
        var e = event.target;
        e.preventDefault
        
        if (e.classList.contains( 'm-nav-toggler' ) ) { // botones en formas de contacto 
            togglenav();
        } 
        else if (e.classList.contains( 'sendform' ) ) { //envíos de formas
            var forma = e.form;
            checkvals(forma);
        }
        else if(e.getAttribute("data-target")){// objetos que disparan navegación 
            navegar(e);
        }
                
    }, false);
}

function navegar(e){
    var t = e.getAttribute('data-target'),
        at;

    if( t.startsWith("#")){at = t;togglenav();}
    else if(t.startsWith("http")) {at = t;}
    else if(t.startsWith("?")){at = rootpath+'/'+e.getAttribute('data-target');}
    else if(t=="home"){at = rootpath;}
    console.log(t);
    window.location=at;
}

function togglenav(){
    var panel = document.getElementById('panel');
    console.log('toggle!');
    panel.classList.toggle("sliding");
}

function modalInit(){
    // Get the modal
    var modal = document.getElementById('modal_contacto');

    if(!modal || modal == null) return;
    
    // Get the button that opens the modal
    var btn = document.getElementById("contacto_head");
    
    if(!btn || btn == null) return;


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
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
    var e = document.getElementById("pagepiling"),
        anchors=[];
    if(!e || e == null) return;
    
    var anchores = document.querySelectorAll('#pagepiling > section');
    anchores.forEach(function(el){ anchors.push(el.id);});
    
    $('html').addClass('pagepiled');
    
    $('#pagepiling').pagepiling({
        direction: 'horizontal',
        verticalCentered: true,
        loopBottom: true,
        afterRender: function(){
            document.getElementById('nav_sections').classList.add('hidden');
        },
        anchors: anchors,
        afterLoad: function(anchorLink, index){            
            if(anchorLink == 'modelo' || anchorLink == 'contacto') document.getElementById('nav_sections').classList.remove('hidden');
            var navleft = document.querySelectorAll('#nav_sections > .nav-left');
            navleft[0].classList.add('hidden');
        },
        onLeave: function(index, nextIndex, direction){
            //after leaving section 2
            if(nextIndex == 1) document.getElementById('nav_sections').classList.add('hidden');
        }
    });
}

function cycleInit(){
    var e = document.querySelectorAll('#cycle ul > li');
    if(!e || e == null) return;

    var mensajes = [],
        x = 0;
    e.forEach(function(el){ mensajes.push(el.innerHTML);});
    
    loopmsg();
    setInterval(loopmsg, 3500);
    // cycles through different salutations
    function loopmsg(){
        $('#cycle h3').fadeOut(1000, function(){
            $(this).text(mensajes[x + 1]);
            $(this).fadeIn(1000);
            x++;

            // resets x
            if (x > mensajes.length - 2) {
                x = -1;
            }
        }
                       )};
}; 

function slideoutOLD(){
    var e = document.getElementById("slideout");
    if(!e || e == null) return;
    
    var triggers = document.querySelectorAll('.slideout-trigger');
    var panel =  document.getElementById('panel');
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

function slideoutInit(){
    console.log("slide out initializing");
    var e = document.querySelectorAll("main.panel");
    if(!e[0] || e[0] == null) return;
    console.log(e[0]);
    var slideout = new Slideout({
        'panel': e[0],
        'menu': document.getElementById('slideMenu'),
        'padding': 256,
        'tolerance': 70
    });
}

function odometerInit(){  
    // evaluate if there's an odometer
    var odo = document.getElementsByClassName("odometer");
    
    if(!odo[0] || odo[0] == null) return;

    setTimeout(function(){
        for(var i = 0; i < odo.length; i++){
            var element = odo[i];
            var data = element.getAttribute('data-odo');
            element.innerHTML = data;
        }
    }, 10000);

}

function unsliderInit(){
    // evaluate if there's an unslider
    var unslider = document.getElementsByClassName("unslider");
    
    if(!unslider[0] || unslider[0] == null) return;
    for(var i = 0; i < unslider.length; i++){
        var options = unslider[i].dataset.unslider_options;
        if(!options || options == null) {
            jQuery(unslider[i]).unslider();
        }else{
            options = JSON.parse(options);
            jQuery(unslider[i]).unslider(options);
        };
        
    }
}

/*** mono ****
function hasDir() evaluates if there is an element in the DOM
with the "data-sourcedir" attribute
retrieves it's value, iterates through the folder 
and then passes the items' array to the function passed to it 
to handle response.
****/
function getFolderItems(){
    var datareferers = document.querySelectorAll("[data-sourcedir]"),
        datareferer,
        sourcedir,
        callback;
    
    for (i = 0 ; i < datareferers.length ; i ++ ){
        datareferer = datareferers[i]; 
        sourcedir = datareferer.getAttribute('data-sourcedir');
        callback = datareferer.getAttribute('data-callback');
        
        if(!callback ) {
            if(!datareferer.classList.contains('portfolio-item')){
                throw "no callback function declared for datasource";
            }
            callback = 'photoSwipeFromDIR';
        }
     
        if(typeof sourcedir=== 'undefined' || sourcedir === null){throw "data-source tag with no value available";}
        try {
            ajaxcall(datareferer,sourcedir);
        } catch (e){
            console.log(e);
            return false;
        }
    }
}

function photoSwipeFromDIR(datareferer,diritems){
    if(typeof pswpElement === 'undefined' || !pswpElement){ throw "no pswpElement found";}
    // build items array
    var items = [],
        item = [],
        pic,
        gal;
    
    for(var i = 0; i < diritems.length; i++) {
        pic = diritems[i];
        switch (pic.type){
            case "image":
                item = {
                    src     :   pic.dir,
                    w       :   pic.width,
                    h       :   pic.height,
                    title   :   pic.title,
                    desc    :   pic.description,
                    tags    :   pic.tag
                }
                break;
                
            case "video":
                var video = '<div class="wrapper"><div class="video-wrapper"><video width="'+pic.width+'" height="'+pic.height+' class="pswp__video" src="'+pic.dir+'" controls></video></div></div>'
                item = {html: video}
                break;
        }
        items.push(item);
    }
    
    // define options (if needed)


    var n = pswpGalleries.length, gal;
    var name = 'pswipe'+n;
    var options = {
        history: true,
        focus: true,
        showAnimationDuration: 0,
        hideAnimationDuration: 0,
        name : name
    };

    datareferer.addEventListener('click', function() {
        datareferer.preventDefault;
        pswpGalleries[n] = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gal = pswpGalleries[n]
        gal.init();

        gal.listen('beforeChange', function() {   
            var currItem = $(gal.currItem.container);
            $('.pswp__video').removeClass('active');
            $('.pswp__video').trigger('pause');
            var currItemIframe = currItem.find('.pswp__video').addClass('active');
            var videos = document.getElementsByTagName("video");
            for (i=0; i<videos.length; i++){
                videos[i].pause();
            }
            //console.log(videos);
            $('.pswp__video').each(function() {                
                //console.log( $(this));
                
                if (!$(this).hasClass('active')) {
                    $(this).attr('src', $(this).attr('src'));
                }
            });
        });

        gal.listen('close', function() {
            var videos = document.getElementsByTagName("video");
            for (i=0; i<videos.length; i++){
                videos[i].pause();
            }
            $('.pswp__video').each(function() {
                console.log( $(this));
                
                $(this).attr('src', $(this).attr('src'));
            });
        });
    });
}

function ajaxcall(datareferer,sourcedir){
    $.ajax({
        url: 'php/services/dirmedia.php',
        data: {"dir":sourcedir},
        error: function() {
            throw "ajax failed, callback function not initiated";
        },
        dataType: 'json',
        success: function(diritems) {
            if(typeof diritems === 'undefined' || diritems === null){
                throw "no diritems returned, callback not initiated";
            }
            try{
                photoSwipeFromDIR(datareferer,diritems);
            }catch(e){
                throw (e);
                return false;
            }
        },
        type: 'GET'
    });
}

function photoswipe_GalleryBuilder(images) {
    var container = document.getElementById("swipe_gallery");
    if(!container || container == null) return;

    //For each image,
    for(var i = 0; i < images.length; i++) {
        var imageName = images[i].split('/').pop();
        var path=images[i].substring(0, images[i].lastIndexOf("/"));
        var imgDims=(images[i].substring(images[i].lastIndexOf("dims-")+5,images[i].lastIndexOf("."))).replace(/\s/g,'');

        //        console.log("imageName = "+imageName + " | path = "+path + " | dims = "+imgDims);

        //Make a new image element, setting the source to the source in the array
        var newFig = document.createElement("figure");
        newFig.setAttribute("class", "swipe_element");
        newFig.setAttribute("itemprop", "associatedMedia");
        newFig.setAttribute("itemscope", "");
        newFig.setAttribute("itemtype","http://schema.org/ImageObject");
        //        console.log(newFig);

        var newAnchor = document.createElement("a");
        newAnchor.setAttribute("href", images[i]);
        newAnchor.setAttribute("itemprop", "contentUrl");
        newAnchor.setAttribute("data-size", imgDims);


        var newImage = document.createElement("img");
        //        newImage.onload = function () { var imgDims = newImage.width + ' x ' + newImage.height; };
        //        newImage.src='http://sstatic.net/so/img/logo.png';
        newImage.setAttribute("src",path+"/thumbs/"+imageName);
        newImage.setAttribute("itemprop", "thumbnail");

        //        newImage.setAttribute("alt", "");


        //        var captionText = imageName.substring(0, imageName.lastIndexOf("."));
        var captionText = imageName.substring(imageName.lastIndexOf("/"),imageName.lastIndexOf("dims-")-1).replace(/[_-]|\s/g,' ');
        var newCaption = document.createElement("figcaption");
        newCaption.setAttribute("itemprop", "caption description");
        newCaption.innerHTML= captionText;

        newAnchor.appendChild(newImage);
        newFig.appendChild(newAnchor);
        newFig.appendChild(newCaption);
        container.appendChild(newFig);
    }
    photoSwipeFromDOM(".my-gallery");
}

function photoSwipeFromDOM(gallerySelector){

    // parse slide data (url, title, size ...) from DOM elements 
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes 
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML; 
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('src');
            } 

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) { 
                continue; 
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
            params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');  
            if(pair.length < 2) {
                continue;
            }           
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect(); 

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used 
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
}