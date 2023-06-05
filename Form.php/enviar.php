      
<?php
//Llamando a Los Campos

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$number = $_POST['number'];
$email = $_POST['email'];
$time = $_POST['time'];
$motivo = $_POST['motivo'];
$message = $_POST['message'];
$checkbox = $_POST['checkbox'];
$submit = $_POST['submit'];  

// Datos Para el Correo

$para = 'eescobar212@gmail.com';
$asunto = 'Contacto desde nuestra web';

$header .= 'From:' . $_POST['email'] . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-Type: text/plain';

$message .= "Este mensaje fue enviado por: " . $first_name . " \r\n";
$message .= "Su e-mail es: " . $last_name . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Enviado el: " . $date . " \r\n";
$message .= "a las: " . $time . " \r\n";
$message .= "Número de personas: " . $number . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Motivo: " . $Motivo . " \r\n";
$message .= "Mensaje: " . $message . " \r\n";
$message .= "¿Acepta nuestra política de privacidad?: " . $checkbox. " \r\n";
$message .= "Enviar: " . $submit . " \r\n";

// Enviando Mensaje

mail($para, $asunto, utf8_decode($message), $header);
header('Location:Mensaje-de-envio.html');
?>
-->
<?php
//Llamando a Los Campos

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$number = $_POST['number'];
$email = $_POST['email'];
$time = $_POST['time'];
$motivo = $_POST['motivo'];
$message = $_POST['message'];
$checkbox = $_POST['checkbox'];
$submit = $_POST['submit'];  

// Datos Para el Correo

$para = 'eescobar212@gmail.com';
$asunto = 'Contacto desde nuestra web';

$header .= 'From:' . $_POST['email'] . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-Type: text/plain';

$message .= "Este mensaje fue enviado por: " . $first_name . " \r\n";
$message .= "Su e-mail es: " . $last_name . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Enviado el: " . $date . " \r\n";
$message .= "a las: " . $time . " \r\n";
$message .= "Número de personas: " . $number . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Motivo: " . $Motivo . " \r\n";
$message .= "Mensaje: " . $message . " \r\n";
$message .= "¿Acepta nuestra política de privacidad?: " . $checkbox. " \r\n";
$message .= "Enviar: " . $submit . " \r\n";

// Enviando Mensaje

mail($para, $asunto, utf8_decode($message), $header);
header('Location:Mensaje-de-envio.html');
?>