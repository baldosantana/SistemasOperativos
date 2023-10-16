<?php

$para = 'baldosantana@gmail.com';

// título
$título = 'Gracias por registrarte';

//aleatoria
$codigo = rand(100000,999999);

// mensaje
$mensaje = '
<html>
<head>
    <meta charset="UTF8" />
  <title>Gracias por registrarse</title>
</head>
<body>
  <p>tu codigo de verificacion es :!</p>
  <h2>'.$codigo.'</h2>
  <p> <a 
     href="http://localhost:3000/confirm.php?email='.$email.'">
         Verificar cuenta </a> 
    </p>
 
  
</body>
</html>
';
// Elimina las etiquetas HTML del contenido de $mensaje
//$mensaje = strip_tags($mensaje);
$cabeceras = 'From: Proyecto1 <fisc@utp.com>' . "\r\n";
/*
// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

// Enviarlo
$enviado=false;
if(Mail($para, $título, $mensaje, $cabeceras)){
   
   $enviado=true;
}




?>