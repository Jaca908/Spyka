<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$number = $_POST["number"];
$tipo = $_POST["tipo"];


$body = "Nombre: " . $nombre . "<br>Correo: " . $email . "<br>Telefono: " . $number . "<br>Tipo: " . $tipo;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'feedback@compuserviciosgomez.net';                     // SMTP username
    $mail->Password   = 'kysarugv26';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, "Nuevo Cliente");
    $mail->addAddress('ventas@compuserviciosgomez.net');     // Add a recipient
    $mail->addAddress('hfcro@yahoo.com', 'Con Copia A:');     // Add a recipient




    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Correo Enviado desde Spykacr";
    $mail->Body    = $body;


    $mail->send();
    echo '<script>
      alert("El mensaje se envio correctamente!");
      window.history.back(-1);

      </script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
