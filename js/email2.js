var http = createRequestObject(),
    areal = Math.random() + "",
    real = areal.substring(2,6),
    form_els =[];

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

function sendRequest(forma) {
    console.log('sending request');
    var rnd = Math.random();
    var nombre = escape($("#nombre",forma).val());
    var empresa = escape($("#empresa",forma).val());
    var email = escape($("#email",forma).val());
    var telefono = escape($("#telefono",forma).val());
    var ciudad = $("#ciudad",forma).val();
    var seleccion = $("#seleccion",forma).val();
    var intencion = $("#intencion",forma).val();
    var grado = $("#grado",forma).val();
    var comentarios = escape($("#comentarios",forma).val());
    var presupuesto = escape($("#presupuesto",forma).val());
    //    var landing = document.getElementById("landing").value;
    //    var idempresa = document.getElementById("idempresa").value;
    //    var tipo = document.getElementById("tipo").value;
    //    var gracias = document.getElementById("gracias").value;
    //    var origen = document.getElementById("origen").value;
    //    var link = document.getElementById("link").value;

    try{
        http.open('POST',  'php/mailer.php');
        http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = handleResponse(forma);
        http.send('nombre='+nombre+'&empresa='+empresa+'&email='+email+'&telefono='+telefono+'&ciudad='+ciudad+'&seleccion='+seleccion+'&intencion='+intencion+'&grado='+grado+'&comentarios='+comentarios+'&rnd='+rnd);
    }
    catch(e){ console.log(e);}
    finally{
        $('#contactform').slideUp("slow").hide();
        $('#form-wrapper').append('<div class="success"><h4>¡ENVIADO!</h4><br><p>Gracias por escribirnos <strong>'+decodeURIComponent(name)+'</strong>! Tu correo ha sido enviado con éxito y pronto te contactaremos para darle seguimiento.</p></div>');
        //        track();
    }
}

function checkvals(forma){
    var all_els = forma.elements,
        errors = 0;
    
    for(i=0;i<all_els.length;i++){
        var e = all_els[i];
        
        switch (e.type){
            case "text":
            case "email":
            case "tel":
            case "select-one":
            case "checkbox":
               if (e.value == ""){
                   var hasClass=$("label[for='"+e.id+"']").hasClass("err");
                                 if(!hasClass){
                                     switch (e.name){
                                         case "nombre":
                                             $(e).before("<label for='nombre' generated='true' class='err' >Por favor escriba su nombre</label>");
                                             break;
                                         case "empresa":
                                             $(e).before("<label for='empresa' generated='true' class='err'>Por favor escriba la empresa o dependencia a a la que pertenece</label>");
                                             break;
                                         case "ciudad":
                                             $(e).before("<label for='ciudad' generated='true' class='err'>Por favor escriba la ciudad desde la que nos contacta</label>");
                                             break;
                                         case "correo":
                                             $(e).before("<label for='ciudad' generated='true' class='err'>Por favor ingrese un correo de contacto</label>");
                                             break;
                                         case "telefono":
                                             $(e).before("<label for='ciudad' generated='true' class='err'>Por favor ingrese un número telefónico de contacto</label>");
                                             break;
                                         case "seleccion":
                                             $(e).before("<label for='ciudad' generated='true' class='err'>Por favor seleccione el servicio de su interés</label>");
                                             break;
                                         case "intencion":
                                             $(e).before("<label for='ciudad' generated='true' class='err'>Por favor defina el motivo de su contacto</label>");
                                             break;
                                         case "grado":
                                             $(e).before("<label for='ciudad' generated='true' class='err'>Por favor seleccione una opción</label>");
                                             break;
                                        }
                                 }
                                 //            return false;
                                 errors++;
               }
               else{ 
                   switch(e.name){
                       case "correo":
                           if(validate_email($(e).val())==false){
                               $(e).before("<label for='ciudad' generated='true' class='err'>Por favor ingrese un correo válido</label>");
                               errors++;
                           }else{
                               $("label[for='"+e.id+"'].err").remove();
                               form_els.push(e);
                           }
                           break;
                       case "telefono":
                           if(validate_phone($(e).val())==false){
                               $(e).before("<label for='ciudad' generated='true' class='err'>Por favor ingrese un teléfono válido</label>");
                               errors++;
                           }else{
                               $("label[for='"+e.id+"'].err").remove();
                               form_els.push(e);
                           }
                           break;
                       default:
                           $("label[for='"+e.id+"'].err").remove();
                           form_els.push(e);
                           break;
                    }
               }
            break;
        }
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

function handleResponse(forma) {
    console.log('trying handleResponse');
    try{
        if((http.readyState == 4)&&(http.status == 200)){
            console.log(http.readyState);
            var response = http.responseText;
            console.log(response);
            $("#confirmation", forma).html = response;
            $("#confirmation", forma).css("display","");
        }
        else{
            console.log(http.readyState);
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