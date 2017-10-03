
//var $ = $();

var http = createRequestObject();
var areal = Math.random() + "";
var real = areal.substring(2,6);

function createRequestObject() {
	var xmlhttp;
	try {
	var xmlhttp = null;if (window.XMLHttpRequest) { xmlhttp = new XMLHttpRequest();}else{  if (window.ActiveXObject) {     xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');  } }

// xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
	}
  catch(e) {
    try { 
    var xmlhttp = null;if (window.XMLHttpRequest) { xmlhttp = new XMLHttpRequest();}else{  if (window.ActiveXObject) {     xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');  } }
    	//xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(f) { xmlhttp=null; }
  }
  if(!xmlhttp&&typeof XMLHttpRequest!="undefined") {
  	xmlhttp=new XMLHttpRequest();
  }
	return  xmlhttp;
}

function sendModalRequest() {
	console.log('sending request');
	var rnd = Math.random();
    var nombre = escape($('#contactform-modal #nombre').val());
    var empresa = escape($('#contactform-modal #empresa').val());
    var email = escape($('#contactform-modal #email').val());
    var telefono = escape($('#contactform-modal #telefono').val());
    var ciudad = $('#contactform-modal #ciudad').val();
    var seleccion = $('#contactform-modal #seleccion').val();
    var intencion = $('#contactform-modal #intencion').val();
    var grado = $('#contactform-modal #grado').val();
    var comentarios = escape($('#contactform-modal #comentarios').val());
    console.log('nombre= '+nombre);
//    var landing = document.getElementById("landing").value;
//    var idempresa = document.getElementById("idempresa").value;
//    var tipo = document.getElementById("tipo").value;
//    var gracias = document.getElementById("gracias").value;
//    var origen = document.getElementById("origen").value;
//    var link = document.getElementById("link").value;
    
    try{
    http.open('POST',  'php/mailer.php');
    http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = handleModalResponse;
 http.send('nombre='+nombre+'&empresa='+empresa+'&email='+email+'&telefono='+telefono+'&ciudad='+ciudad+'&seleccion='+seleccion+'&intencion='+intencion+'&grado='+grado+'&comentarios='+comentarios+'&rnd='+rnd);
	}
	catch(e){ console.log(e);}
	finally{
        $('#contactform-modal').slideUp("slow").hide();
        $('#contactWrapper').append('<div class="success"><h4>Email Successfully Sent!</h4><br><p>Thank you for using our contact form <strong>'+decodeURIComponent(name)+'</strong>! Your email was successfully sent and we&#39;ll be in touch with you soon.</p></div>');
//        track();
	}
}

function modal_check_values() {
    //Form
    var valid = '';


//    var $ = $.noConflict();

    var nombre = '';
    var email = '';
    var telefono = '';
    var ciudad = '';
    var seleccion = '';
    var intencion = '';
    var grado = '';


    if(typeof $('#contactform-modal #nombre').val() != "undefined" )
    {
        nombre = $('#contactform-modal #nombre').val();
    }
    if(typeof $('#contactform-modal #email').val() != "undefined" )
    {
        email = $('#contactform-modal #email').val();
    }
    if(typeof $('#contactform-modal #telefono').val() != "undefined" )
    {
        telefono =$('#contactform-modal #telefono').val();
    }
    if(typeof $('#contactform-modal #ciudad').val() != "undefined" )
    {
        ciudad = $('#contactform-modal #ciudad').val();
    }
    if(typeof $('#contactform-modal #seleccion').val() != "undefined" )
    {
        seleccion = $('#contactform-modal #seleccion').val();
        console.log (seleccion);
    }
    if(typeof $('#contactform-modal #intencion').val() != "undefined" )
    {
        intencion = $('#contactform-modal #intencion').val();
        console.log (intencion);
    }
    if(typeof $('#contactform-modal #grado').val() != "undefined" )
    {
        grado = $('#contactform-modal #grado').val();
        console.log (grado);
    }


    var errors=0;
    if($('#contactform-modal #nombre').val()!=undefined)
        if($('#contactform-modal #nombre').val()=='') {
            var hasClass=$('#contactform-modal #nombre').parent().find(".error").hasClass("error");
            if(!hasClass){
                $('#contactform-modal #nombre').parent().prepend('<label for="contactname" generated="true" class="error">Por favor escriba su nombre</label>');
            $('#contactform-modal #nombre').focus();
            }
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #nombre').parent().find(".error").remove();

    
    if($('#contactform-modal #empresa').val()!=undefined)
        if($('#contactform-modal #empresa').val()=='') {
            var hasClass=$('#contactform-modal #empresa').parent().find(".error").hasClass("error");
            if(!hasClass){
                $('#contactform-modal #empresa').parent().prepend('<label for="contactname" generated="true" class="error">Por favor escriba la empresa a la que pertenece</label>');
                $('#contactform-modal #empresa').focus();
            }
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #empresa').parent().find(".error").remove();

    
    
    if($('#contactform-modal #ciudad').val()!=undefined)
        if($('#contactform-modal #ciudad').val()=='') {
            var hasClass=$('#contactform-modal #ciudad').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform-modal #ciudad').parent().prepend('<label for="ciudad" generated="true" class="error">Por favor ingrese la ciudad en que reside</label>');
            $('#contactform-modal #ciudad').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #ciudad').parent().find(".error").remove();

    if($('#contactform-modal #email').val()!=undefined)
        if(validate_email($('#contactform-modal #email').val())==false ) {
            var hasClass=$('#contactform-modal #email').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform-modal #email').parent().prepend('<label for="email" generated="true" class="error">Por favor ingrese un correo válido</label>');	
            $('#contactform-modal #email').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #email').parent().find(".error").remove();
    
    if($('#contactform-modal #telefono').val()!=undefined)
        if(validate_phone($('#contactform-modal #telefono').val())==false ) {
            var hasClass=$('#contactform-modal #telefono').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform-modal #telefono').parent().prepend('<label for="telefono" generated="true" class="error">Por favor ingrese un teléfono válido</label>');	
            $('#contactform-modal #telefono').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #telefono').parent().find(".error").remove();
    
    if($('#contactform-modal #seleccion').val()!=undefined)
        if($('#contactform-modal #seleccion').val()=='0') {
            console.log($('#contactform-modal #seleccion').val());
            var hasClass=$('#contactform-modal #seleccion').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform-modal #seleccion').parent().prepend('<label for="seleccion" generated="true" class="error">Por favor seleccione el servicio de su interés</label>');
            $('#contactform-modal #intencion').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #seleccion').parent().find(".error").remove();
    
    if($('#contactform-modal #intencion').val()!=undefined)
        if($('#contactform-modal #intencion').val()=='0') {
            console.log($('#contactform-modal #intencion').val());
            var hasClass=$('#contactform-modal #intencion').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform-modal #intencion').parent().prepend('<label for="intencion" generated="true" class="error">Por favor defina la intención de su contacto</label>');
            $('#contactform-modal #intencion').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #intencion').parent().find(".error").remove();
    
    if($('#contactform-modal #grado').val()!=undefined)
        if($('#contactform-modal #grado').val()=='0') {
            console.log($('#contactform-modal #grado').val());
            var hasClass=$('#contactform-modal #periodo').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform-modal #grado').parent().prepend('<label for="grado" generated="true" class="error">Por favor indique grado de prioridad que tiene para usted este proyecto</label>');
            $('#contactform-modal #periodo').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform-modal #grado').parent().find(".error").remove();

    if(errors==0) {
        document.getElementById("send-modal").disabled=true;
        document.getElementById("send-modal").value='Enviando..';
        sendModalRequest();
    }
}

function handleModalResponse() {
    console.log('trying handleModalResponse');
	try{
    if((http.readyState == 4)&&(http.status == 200)){
        console.log(http.readyState);
    	var response = http.responseText;
        console.log(response);
          document.getElementById("modal-confirmation").innerHTML = response;
          document.getElementById("modal-confirmation").style.display ="";$
		}
        else{
//            console.log(http.readyState);
        }
  }
	catch(e){}
	finally{}
}


