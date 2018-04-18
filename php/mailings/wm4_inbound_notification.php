<?php 
    $email_message_headers="<HTML>
    <BODY>
        <style>
            
        </style>
        <font face='Arial, Helvetica, sans-serif'>";
    $email_message_body="
            <h2>Información del prospecto</2>
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
            </p>
            <hr>";
            $email_message_footer"</font></BODY></HTML>";


$email_message .="registro creado el ".date("d/m/Y")."\n\n";
$email_message .="\n\n";