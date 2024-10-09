<?php
    // session_start();
    // $auth = $_SESSION['login'];
    // if(!$auth) {
    //     header('Location: /ifts04');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/e_iniciales.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/navegacion.css">
    <link rel="stylesheet" href="../css/modalStyle.css">
    <link rel="stylesheet" href="../css/administrador.css">
    <link rel="stylesheet" href="../css/elimDatos.css">
</head>
<body>
    <!-- <h1>Panel de Administracion</h1>
    <h3>
        En esta pagina se debe crear la Administracion del sitio.
        Esta pagina solo es accesible mediante una sesion valida de usuario.
    </h3> -->
    <?php
        include("navegacion_admin.php");
        include("modal_admin.php"); 
        // include("../header_publico.php");

    ?>
    <!-- <a href="logout.php">
        Log Out
    </a> -->
    <h1>
        Bienvenidos al sitio oficial del IFTS 4 !!!
        <br>
        &#x1f31d;
        &#x1f600;
        &#x1f60a;
    </h1>
    <h2>
        Desde este modulo vas a poder publicar noticias importantes para la comunidad del IFTS 4!!
    </h2>
</body>
</html>