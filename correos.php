<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$receptores= 'jcospina@cispcolombia.org';

$contenido= "Buen día,

Ha recibido correspondencia.



Cordialmente:
-Recepción Cisp Colombia.";
		



	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host  = 'smtp.gmail.com'; 
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 2;
	$mail->SMTPSecure  =  'ssl'; 
	$mail->Port  =  465; 
	
	$mail->Username = 'noreply@cispcolombia.org';
	$mail->Password = 'C1sp2018*';

	//Configuracion del correo a Enviar

	$mail->setFrom('noreply@cispcolombia.org');
	$mail->addAddress($receptores, 'receptor');
	$mail->Subject = 'Nueva Correspondencia';
	$mail->Body = $contenido;

	//envio

 if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
     	header("Location:home.php");
        echo "Message has been sent";
     }

?>
