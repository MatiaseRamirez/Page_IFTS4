<?php
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require 'phpmailer/SMTP.php';
require 'conexion/conexionDb.php';
$db = conectarDB(); 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje= $_POST['mensaje'];

$query = " INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES ( '$nombre', '$email', '$asunto', '$mensaje') ";
mysqli_query($db, $query);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Crear un instancia de PHPMailer
$phpmailer = new PHPMailer();

// Configurar SMTP
$phpmailer->isSMTP();
//$phpmailer->SMTPDebug = 2;
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';//servicio
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = '4e0db2c16a404e';
$phpmailer->Password = '27ec4191ea9f0c';
$phpmailer->SMTPSecure = 'tls';

// Configurar el contenido del email
$phpmailer->setFrom ('admin@ifts4.com');//no es indispensable tenerlo
$phpmailer->addAddress('ncortesguiet@gmail.com', 'Sitio IFST04'); //el mail puede no estar, solo es para que se reconosca que el mail viene del sitio web
$phpmailer->Subject = ('Tienes un nuevo Mensaje');

// Habilitar HTML
$phpmailer->isHTML(true);
$phpmailer->CharSet = 'UTF-8';

// Definir Contenido
$contenido = '<html>';
$contenido .= '<p>Tienes un nuevo mensaje</p>'; 
$contenido .= '<p>Nombre: ' . $nombre . ' </p>'; 
$contenido .= '<p>Email: ' . $email . ' </p>'; 
$contenido .= '<p>Asunto: ' . $asunto . ' </p>'; 
$contenido .= '<p>Mensaje: ' . $mensaje . ' </p>'; 
$contenido .= '</html>';



$phpmailer->Body = $contenido;
$phpmailer->AltBody = 'Esto es texto alternativo sin html';

// Enviar el Email
if($phpmailer->send()) {
    //sleep(15);
    //header('Location: /2c2023-main/contacto.php');
    header("refresh:5;url=http://localhost/ifts04/contacto.php");
    echo "Mensaje enviado correctamente";
} else {
    echo "El mensaje no se pudo enviar";
}
?>