<?php 

$nombre   = $_POST['nombre'];
$email    = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa  = $_POST['empresa'];
$ubicacion= $_POST['ubicacion'];
$detalle  = $_POST['detalle'];

if (isset($_POST["enviar"])) {
    require "../mailer/PHPMailerAutoload.php";
    $mail = new PHPMailer();
    $mail->isSMTP();                                         
    //$mail->Host       = 'mail.digimediamkt.com';
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->Port       = 587;               
    $mail->SMTPAuth   = true; 
    $mail->SMTPSecure = 'tls';                                   
    $mail->Username   = 'taipe.marvin17@gmail.com';                    
    $mail->Password   = 'bacalo159'; 

    //Recipients
    $mail->setFrom($email,$nombre);
    $mail->addAddress('taipe.marvin17@gmail.com'); 
    $mail->addReplyTo($email,$nombre);

    $mail->isHTML(true);
    $mail->Subject='Enviado por'.$nombre;
    $mail->Body="Nombre: ". $nombre . "<br>
                 Correo: ". $email ."<br>
                 Telefono: ". $telefono . "<br>
                 Empresa: ". $empresa . "<br>
                 Direccion: ". $ubicacion . "<br>
                 Detalle: " . $detalle;
}


   if($mail->send()){
     echo'<script type="text/javascript">
        alert("mensaje enviado exitoso espere nuestra respuesta");
        window.location.href="../index.html";
        </script>';
}
else {
    echo 'Error';
    echo $mail->ErrorInfo;
}
?>