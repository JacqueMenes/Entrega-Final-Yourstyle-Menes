<?php
$name = $_POST['name'];
$Email = $_POST['mail'];
$Comentario = $_POST['elmensaje'];

//Cabecera
//$header . = "Content-Type: text/plain";

//Envio del mail

$mensaje1 = "Enviado Por:"  . $name . ",\r\n";
$mensaje3 = "Email:"  . $Email . ",\r\n";
$mensaje6 = "Comentario:"  . $_POST['elmensaje'] . ",\r\n";

$mensajes7 = 'Enviado Por:' .$mensaje1  .$mensaje3 .$mensaje6 . 'FIN';

//Destinatario
$para = 'jacqueline@yourstyle.ar';
$asunto = 'Enviado desde YourStyle.ar';

//Mail
mail($para, $asunto, $mensajes7);

//A donde va despues de enviar el formulario
header('Location:exito.html');
?>