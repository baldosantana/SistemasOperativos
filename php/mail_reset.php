<?php
// Varios destinatarios
//$para  =$email . ', '; // atención a la coma
$para = 'baldo2@gmail.com';
//$para .= 'wez@example.com';

// título
$título = 'Restablecer password empresa';
$codigo= rand(1000,9999);


// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer</title>
</head>
<body>
    <h1>Nombre de la empresa</h1>
    <div style="text-align:center; background-color:#ccc">
        <p>Restablecer contraseña</p>
        <h3>'.$codigo.'</h3>
        <p> <a 
            href="http://localhost:3000/reset.php?email='.$email.'&token='.$token.'"> 
            para restablecer da click aqui </a> </p>
        <p> <small>Si usted no envio este codigo favor de omitir</small> </p>
    </div>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
//$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
//$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$cabeceras = 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras = 'From: Proyecto1 <fisc@utp.com>' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
*/
// Enviarlo
$enviado =false;
if(mail($para, $título, $mensaje, $cabeceras)){
    $enviado=true;
}

?>