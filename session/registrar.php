<?php

// logica para cuando funciona
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        // $index = "index_profesional.php";
        $index = "../admin/index.php";
        $descripcion = "Volver al menú del Profesional";
    }else{
        $index = "../../index.php";
        $descripcion = "Inicio";

    }
    include 'logica_registrar.php';


// logica para prueba

    // session_start();
    // if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    //     // $index = "index_profesional.php";
    //     $index = "../admin/index.php";
    //     $descripcion = "inicio";
    // }else{
    //     $index = "../admin/index.php";
    //     $descripcion = "Volver al menú del Profesional";

    // }
    // include 'logica_registrar.php';

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Registar</title>
        <!-- <link rel="shortcut icon" href="img/favi.ico" /> -->
        <!-- <link rel="stylesheet" href="css/e_iniciales.css">
        <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="../../css/style_login.css">
    </head>
    <body>
        <div class="login">
            <div class="login-triangle"></div>
                <h2 class="login-header">Registrar nuevo Profesional</h2>
                <form class="login-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="">Nombre de Usuario</label>
                    <p><input type="text" name="username" placeholder="Tu nombre"></p>
                    <span class="msg-error"><?php echo $username_err; ?></span>
                    <label for="">Email</label>
                    <p><input type="text" name="email" placeholder="Tu mail"></p>
                    <span class="msg-error"> <?php echo $email_err; ?></span>
                    <label for="">Contraseña</label>
                    <p><input type="password" name="password" placeholder="Tu contraseña"></p>
                    <span class="msg-error"> <?php echo $password_err; ?></span>

                    <label for="">Rol</label>
                    <p><input placeholder="1=admintrador 2=editor" type="text" name="rol"></p>
                    <span class="msg-error"> <?php echo $rol_err; ?></span>

                    <p><input type="submit" value="Registrar"></p>
                    <span class="msg-error"> <?php echo $mensaje; ?></span>
                    <div class="paginas">
                    <a href="<?php echo $index;?>">╚►<?php echo $descripcion;?></a>
                    <br>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
