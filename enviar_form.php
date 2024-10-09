<?php setcookie('errorform', $value ='falso'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favi.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="MDC">
    <meta name="Description" content="Instituto de Formación Técnico Superior">
    <meta name="Keywords" content="IFTS">
    <meta name="Resource-type" content="Document">
    <meta name="DateCreated" content="21/6/2023">
    <meta name="Revisit-after" content="1 month">
    <meta name="Robots" content="All">
    <meta name="Language" scheme="RFC1766" content="spanish">
    <title>Carreras</title>
    <link rel="stylesheet" href="css/e_iniciales.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<?php
    include("navegacion.php");
    include("header_publico.php");
if (!empty($_POST['enviar'])){
    if (empty($_POST['nombre']) or
        empty($_POST['email']) or
        empty($_POST['asunto']) or
        empty($_POST['mensaje'])){
        print '
            <form action="contacto.php">
                <input type="submit" value="Error, volver al formulario" class="btn btn-primario">
            </form>';
    } else {
        
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $to="mail@ifts04.bue.edu.ar";
        $nom="Mensaje automatico de: ".$_POST['nombre'];
        $mail="El mail de contacto es: ".$_POST['email'];
        $mensaje="Mensaje: ".$_POST['mensaje'];
        $msg=$nom." \r\n ".$mail." \r\n ".$mensaje;
        echo "<section><p>".$msg."</p></section>";
        mail($to, $asunto, $msg);

        //ACA VIENE LA RESPUESTA
        $r_asunto ="Mensaje automatico en respuesta a: ".$asunto;
        $r_mensaje = "Hola, \r\n estamos trabajando en tu solicitud. \r\n Pronto vas a tener noticias. \r\n Saludos."; 
        mail($email,$r_asunto);

    } 
}
    include("navegacion_footer.php");
    include("footer_publico.php");
    include("footer_desarrollo.php");
?>
</body>
</html>