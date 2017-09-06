
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

function sendRequest() {
	console.log('sending request');
	var rnd = Math.random();
	var nombre = escape(document.getElementById("nombre").value);
    var empresa = escape(document.getElementById("empresa").value);
	var email = escape(document.getElementById("email").value);
	var telefono = escape(document.getElementById("telefono").value);
	var ciudad = document.getElementById("ciudad").value;
    var seleccion = document.getElementById("seleccion").value;
    var intencion = document.getElementById("intencion").value;
    var grado = document.getElementById("grado").value;
    var comentarios = escape(document.getElementById("comentarios").value);
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
    http.onreadystatechange = handleResponse;
 http.send('nombre='+nombre+'&empresa='+empresa+'&email='+email+'&telefono='+telefono+'&ciudad='+ciudad+'&seleccion='+seleccion+'&intencion='+intencion+'&grado='+grado+'&comentarios='+comentarios+'&rnd='+rnd);
	}
	catch(e){ console.log(e);}
	finally{
        $('#contactform').slideUp("slow").hide();
        $('#contactWrapper').append('<div class="success"><h4>Email Successfully Sent!</h4><br><p>Thank you for using our contact form <strong>'+decodeURIComponent(name)+'</strong>! Your email was successfully sent and we&#39;ll be in touch with you soon.</p></div>');
//        track();
	}
}

function validate_email(address) {
    console.log('validating email');
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   if(reg.test(address) == false) {
      return false;
   }
   else
   return true;
}

function validate_phone(phone){
    console.log('validating phone');
    var phoneNum = phone.replace(/[^\d]/g, '');
    if(phoneNum.length > 6 && phoneNum.length < 11) {  return true;  } else {return false;}
}

function check_values() {
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


    if(typeof $('#contactform #nombre').val() != "undefined" )
    {
        nombre = document.getElementById("nombre").value;
    }
    if(typeof $('#contactform #email').val() != "undefined" )
    {
        email = document.getElementById("email").value;
    }
    if(typeof $('#contactform #telefono').val() != "undefined" )
    {
        telefono = document.getElementById("telefono").value;
    }
    if(typeof $('#contactform #ciudad').val() != "undefined" )
    {
        ciudad = document.getElementById("ciudad").value;
    }
    if(typeof $('#contactform #seleccion').val() != "undefined" )
    {
        seleccion = document.getElementById("seleccion").value;
        console.log (seleccion);
    }
    if(typeof $('#contactform #intencion').val() != "undefined" )
    {
        intencion = document.getElementById("intencion").value;
        console.log (intencion);
    }
    if(typeof $('#contactform #grado').val() != "undefined" )
    {
        grado = document.getElementById("grado").value;
        console.log (grado);
    }


    var errors=0;
    if($('#contactform #nombre').val()!=undefined)
        if($('#contactform #nombre').val()=='') {
            var hasClass=$('#contactform #nombre').parent().find(".error").hasClass("error");
            if(!hasClass){
                $('#contactform #nombre').parent().prepend('<label for="contactname" generated="true" class="error">Por favor escriba su nombre</label>');
            $('#contactform #nombre').focus();
            }
//            return false;
            errors++;
        }
        else
            $('#contactform #nombre').parent().find(".error").remove();

    
    if($('#contactform #empresa').val()!=undefined)
        if($('#contactform #empresa').val()=='') {
            var hasClass=$('#contactform #empresa').parent().find(".error").hasClass("error");
            if(!hasClass){
                $('#contactform #empresa').parent().prepend('<label for="contactname" generated="true" class="error">Por favor escriba la empresa a la que pertenece</label>');
                $('#contactform #empresa').focus();
            }
//            return false;
            errors++;
        }
        else
            $('#contactform #empresa').parent().find(".error").remove();

    
    
    if($('#contactform #ciudad').val()!=undefined)
        if($('#contactform #ciudad').val()=='') {
            var hasClass=$('#contactform #ciudad').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform #ciudad').parent().prepend('<label for="ciudad" generated="true" class="error">Por favor ingrese la ciudad en que reside</label>');
            $('#contactform #ciudad').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform #ciudad').parent().find(".error").remove();

    if($('#contactform #email').val()!=undefined)
        if(validate_email($('#contactform #email').val())==false ) {
            var hasClass=$('#contactform #email').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform #email').parent().prepend('<label for="email" generated="true" class="error">Por favor ingrese un correo válido</label>');	
            $('#contactform #email').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform #email').parent().find(".error").remove();
    
    if($('#contactform #telefono').val()!=undefined)
        if(validate_phone($('#contactform #telefono').val())==false ) {
            var hasClass=$('#contactform #telefono').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform #telefono').parent().prepend('<label for="telefono" generated="true" class="error">Por favor ingrese un teléfono válido</label>');	
            $('#contactform #telefono').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform #telefono').parent().find(".error").remove();
    
    if($('#contactform #seleccion').val()!=undefined)
        if($('#contactform #seleccion').val()=='0') {
            console.log($('#contactform #seleccion').val());
            var hasClass=$('#contactform #seleccion').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform #seleccion').parent().prepend('<label for="seleccion" generated="true" class="error">Por favor seleccione el servicio de su interés</label>');
            $('#contactform #intencion').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform #seleccion').parent().find(".error").remove();
    
    if($('#contactform #intencion').val()!=undefined)
        if($('#contactform #intencion').val()=='0') {
            console.log($('#contactform #intencion').val());
            var hasClass=$('#contactform #intencion').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform #intencion').parent().prepend('<label for="intencion" generated="true" class="error">Por favor defina la intención de su contacto</label>');
            $('#contactform #intencion').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform #intencion').parent().find(".error").remove();
    
    if($('#contactform #grado').val()!=undefined)
        if($('#contactform #grado').val()=='0') {
            console.log($('#contactform #grado').val());
            var hasClass=$('#contactform #periodo').parent().find(".error").hasClass("error");
            if(!hasClass)
                $('#contactform #grado').parent().prepend('<label for="grado" generated="true" class="error">Por favor indique grado de prioridad que tiene para usted este proyecto</label>');
            $('#contactform #periodo').focus();
//            return false;
            errors++;
        }
        else
            $('#contactform #grado').parent().find(".error").remove();

    if(errors==0) {
        document.getElementById("send").disabled=true;
        document.getElementById("send").value='Please Wait..';
        sendRequest();
    }
}

function handleResponse() {
    console.log('trying handleResponse');
	try{
    if((http.readyState == 4)&&(http.status == 200)){
        console.log(http.readyState);
    	var response = http.responseText;
        console.log(response);
          document.getElementById("confirmation").innerHTML = response;
          document.getElementById("confirmation").style.display ="";$
		}
        else{
//            console.log(http.readyState);
        }
  }
	catch(e){}
	finally{}
}

function isUndefined(a) {
   return typeof a == 'undefined';
}

function trim(a) {
	return a.replace(/^s*(S*(s+S+)*)s*$/, "$1");
}

function isEmail(a) {
   return (a.indexOf(".") > 0) && (a.indexOf("@") > 0);
}


