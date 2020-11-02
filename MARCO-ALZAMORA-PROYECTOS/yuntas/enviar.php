<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php'; 


$mail = new PHPMailer(true);

try {
    $mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
		)
	);
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'tcode2319@gmail.com';                     
    $mail->Password   = 'pruebadenuevo23';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                   

    //Recipients
    $mail->setFrom('from@example.com', 'YUNTAS');
    $mail->addAddress($correo); 

    // Content
    $mail->isHTML(true);       // Set email format to HTML
    $mail->Subject = $asunto;  // asunto
    $mail->Body    = $mensaje; // mensaje

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Mensaje de error: {$mail->ErrorInfo}";
}

?>