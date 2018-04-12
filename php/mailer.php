<?php

// ++++++++++++++++++++++++++++++++++++
error_reporting(0);

// configuration
$to = "wm4 - atención a clientes";
//$recipients = "oscar@wm4.mx,maru@wm4.mx,bety@wm4.mx, pepe@wm4.mx";
$recipients = "oscar@wm4.mx";

$error_message = "Por favor complete la información en la forma";

$rnd=$_POST['rnd'];
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$ciudad=$_POST['ciudad'];
$seleccion=$_POST['seleccion'];
$intencion=$_POST['intencion'];
$grado=$_POST['grado'];
$presupuesto=$_POST['presupuesto'];
$comentarios=$_POST['comentarios'];




if(!isset($rnd) || !isset($nombre) || !isset($email) || !isset($telefono) || !isset($ciudad)) {
    echo $error_message . $_POST;
    die();
}


$subject = "WM4 - nuevo registro en forma de contacto ";
$email_from = $email;



$email_message="<HTML>
		<BODY>
		<font face='Arial, Helvetica, sans-serif'>";
$email_message=$email_message."
        <p><strong>Información del prospecto</strong></p>
        <br>
        <p>
		<strong>NOMBRE:</strong> ".$nombre."<br>
        <strong>EMPRESA:</strong> ".$empresa."<br>
        <strong>EMAIL:</strong> ".$email."<br>
		<strong>TELÉFONO:</strong> ".$telefono."<br>
        <strong>CIUDAD:</strong> ".$ciudad."<br>
		<strong>INTERESADOS EN:</strong> ".$seleccion."<br>
        <strong>MOTIVO DE INTERÉS: </strong>".$intencion."<br>
        <strong>GRADO DE INTENCIÓN: </strong>".$grado."<br>
        <strong>Presupuesto: </strong>".$presupuesto."<br>
        <br>
        <strong>COMENTARIOS ADICIONALES:</strong> ".$comentarios."
		<br>
        </p>";

$email_message=$email_message."<br><br>";

$email_message=$email_message."</p><hr>";
$email_message=$email_message."</font></BODY></HTML>";


$email_message .="registro creado el ".date("d/m/Y")."\n\n";
$email_message .="\n\n";

// Always set content-type when sending HTML email


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
$headers .= 'From: "wm4.mx"<no-reply@wm4.mx>'. "\r\n";
$headers .= 'BCC: '.$recipients.' '. "\r\n";


//$headers .= 'From: <'.$email_from.'>' . "\r\n";

if (mail($to,$subject,$email_message,$headers)){
    $to = $email;
    $subject = "Gracias por su contacto";
    $wellcome_message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html lang='en'>
    <head>
        <title>Bienvenido a WM4</title>
        <meta http-equiv='Content-Type' content='text/html charset=UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge' />
        <style type='text/css'>
            /* Stop WebKit from changing text sizes */
            body, table, td, a {
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;
            }
            body {
                height: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }
            /* Removes spacing between tables in Outlook 2007+ */
            table, td {
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            } 
            img {
                border: 0;
                line-height: 100%;
                text-decoration: none;
                -ms-interpolation-mode: bicubic; /* Smoother rendering in IE */
            }
            table {
                border-collapse: collapse !important;
            }
            /* iOS Blue Links */
            a{color: #477dca !important;}

            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
            /* Table fix for Outlook */
            table {
                border-collapse:separate;
            }
            .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {
                line-height: 100%;
            }
            .ExternalClass {
                width: 100%;
            }
            /* Mobile Styling */
            @media screen and (max-width: 525px){
                .wrapper {
                    width: 100% !important;
                    max-width: 100% !important;
                }
                .hide-element {
                    display: none !important;
                }
                .no-padding {
                    padding: 0 !important;
                }
                .img-max {
                    max-width: 100% !important;
                    width: 100% !important;
                    height: auto !important;
                }
                .table-max {
                    width: 100% !important;
                }
                .mobile-btn-container {
                    margin: 0 auto;
                    width: 100% !important;
                }
                .mobile-btn {
                    padding: 15px !important;
                    border: 0 !important;
                    font-size: 16px !important;
                    display: block !important;
                }
            }
            /* iPads (landscape) Styling */
            @media handheld, all and (device-width: 768px) and (device-height: 1024px) and (orientation : landscape) {
                .wrapper-ipad {
                    max-width: 280px !important;
                }
                .table-max-ipad{
                    max-width:465px !important;
                }
            }

            /* iPads (portrait) Styling */
            @media handheld, all and  (device-width: 768px) and (device-height: 1024px) and (orientation : portrait) {
                .wrapper-ipad {
                    max-width: 280px !important;
                }
                .table-max-ipad{
                    max-width:465px !important;
                }
            }
        </style>
    </head>
    <body style='margin: 0 !important; padding: 0 !important;'>
        <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
            <tr id='preheaders'>
                <td align='center'>
                    <!--[if (gte mso 9)|(IE)]>
<table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='600'>
<tr>
<td align='center' valign='top' width='600'>
<![endif]-->
                    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;' class='wrapper'>
                        <tr>
                            <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align='center' valign='top' style='font-size: 11px; font-family: Helvetica, Arial, sans-serif; color: #999999 !important;'> Respuesta a solicitud de información</td>
                        </tr>
                        <tr>
                            <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align='center'><a href='http://wm4.mx' title='wm4' target='_blank'> <img src='http://wm4.mx/services/mailing/img/WM4_250x90.png' width='250' height='89' alt='wm4' style='display: block; border:0; width:250px; height:89px; margin-top:25px;' border='0'> </a> </td>
                        </tr>
                        <tr>
                            <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
                </td>
            </tr>
            <tr id='main-block'>
                <td bgcolor='#ffffff' align='center' style='padding: 0 10px 0 10px;'>
                    <!--[if (gte mso 9)|(IE)]>
<table role='presentation' align='center' border='0' cellspacing='0' cellpadding='0' width='600'>
<tr>
<td align='center' valign='top' width='600'>
<![endif]-->
                    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;' class='table-max'>
                        <tr>
                            <td><table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0'>

                                <tr>
                                    <td><table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0'>
                                        <tr>
                                            <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left'><h1 style='font-family: Helvetica, Arial, sans-serif; font-size: 28px; font-weight:normal; color: #2C3E50; margin:0; mso-line-height-rule:exactly;'>¡Bienvenido!</h1></td>
                                        </tr>
                                        <tr>
                                            <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align='left' style='font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 25px; color: #2C3E50;'> 
                                                <p>Para <strong><a href='http://wm4.mx'>WM4</a></strong> nuestros clientes son lo más importante.</p>
                                                <p>Revisaremos atentamente tu solicitud de información para atenderla con propiedad lo antes posible.</p>
                                                <p>Muy pronto nos pondremos en contacto para dar seguimiento a tu proyecto. </p>
                                                <br />
                                                <p><strong>Saludos,</strong> <br>
                                                    Equipo de atención a clientes <strong><a href='http://wm4.mx'>WM4</a></strong>
                                                </p>
                                            </td>
                                        </tr>
                                        </table></td>
                                </tr>
                                <tr>
                                    <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td align='center'><table role='presentation' width='100%' border='0' cellspacing='0' cellpadding='0'>
                                        </table></td>
                                </tr>
                                </table></td>
                        </tr>
                    </table>
                    <!--[if (gte mso 9)|(IE)]>
</td>
</tr>
</table>
<![endif]-->
                </td>
            </tr>
            <tr id='spacer'>
                <td align='center' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
            </tr>
            <tr id='footer'>
                <td align='center' bgcolor='#000000'>
                    <table role='presentation' width='240' border='0' cellspacing='0' cellpadding='0' bgcolor='#000000'>
                        <tr>
                            <td align='center' bgcolor='#000000' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align='center' bgcolor='#000000'>
                                <table role='presentation' width='240' border='0' cellspacing='0' cellpadding='0'>
                                    <tr>
                                        <td align='center' height='16' width='16'>
                                            <a href='http://wm4.mx' title='encuéntranos' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/map.png' height='16' width='16' alt='Location' style='display:block; border:0; width:16px; height:16px;'>
                                            </a>
                                        </td>
                                        <td align='center' height='16' width='16'>
                                            <a href='http://wm4.mx' title='llámanos' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/phone.png' height='16' width='16' alt='Telephone' style='display:block; border:0; width:16px; height:16px;'>
                                            </a>
                                        </td>
                                        <td align='center' height='16' width='16'>
                                            <a href='http://wm4.mx' title='escríbenos' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/email.png' height='16' width='16' alt='e-mail' style='display:block; border:0; width:16px; height:16px;'>
                                            </a>  
                                        </td>
                                        <td align='center' height='70' width='70'>
                                            <a href='http://wm4.mx' title='contáctanos' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/contacto.png' height='70' width='70' alt='e-mail' style='display:block; border:0; width:70px; height:70px;'>
                                            </a>  
                                        </td>
                                        <td align='center' height='16' width='16'>
                                            <a href='http://wm4.mx' title='Twitter' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/twitter.png' height='16' width='16' alt='Twitter' style='display:block; border:0; width:16px; height:16px;'>
                                            </a>
                                        </td>
                                        <td align='center' height='16' width='16'>
                                            <a href='http://wm4.mx' title='Facebook' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/facebook.png' height='16' width='16' alt='Facebook' style='display:block; border:0; width:16px; height:16px;'>
                                            </a>
                                        </td>
                                        <td align='center' height='16' width='16'>
                                            <a href='http://wm4.mx' title='Instagram' target='_blank'>
                                                <img src='http://wm4.mx/services/mailing/img/instagram.png' height='16' width='16' alt='Instagram' style='display:block; border:0; width:16px; height:16px;'>
                                            </a>  
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align='center' bgcolor='#000000' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                        </tr>
                        <tr>
                            <td align='center' bgcolor='#000000' style='font-family: Helvetica, Arial, sans-serif; font-size: 11px; color:#666; line-height:20px;'>

                                wm4 &nbsp;|&nbsp; &copy; 2017 Todos los derechos reservados
                            </td>
                        </tr>
                        <tr>
                            <td align='center' bgcolor='#000000' height='25' style='height:25px; font-size: 0;'>&nbsp;</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>";
        
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
    $headers .= 'From: "wm4.mx"<no-reply@wm4.mx>'. "\r\n";
    $headers .= 'to: '.$to.' '. "\r\n";
    
    if (mail($to,$subject,$wellcome_message,$headers)){
        echo "Gracias, su solicitud ha sido enviada";
    }else{echo "error de envío de bienvenida";}
}
else{
    echo "hemos tenido algún problema con tu envío, por favor intenta nuevamente";
   //echo "no enviado" . " | PARAMETERS INTENDED: to= ".$to." / subject= ".$subject." / email_mesagge= ".$email_message." / headers= ".$headers;
    die();
}

?>