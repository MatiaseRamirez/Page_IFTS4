<?php
    require "logica_login.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- <link rel="shortcut icon" href="img/favi.ico" /> -->
        <title>Formulario Login</title>
        <link rel="stylesheet" href="../css/style_login.css">
    </head>
    <body>
        <div class="login">
            <div class="login-triangle"></div>
                <h2 class="login-header">Log in</h2>
                <form class="login-container" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="">Email</label>
                    <p><input type="text" name="email"></p>
                    <span class="msg-error"><?php echo $email_err; ?></span>
                    <label for="">Contraseña</label>
                    <p><input type="password" name="password"></p>
                    <span class="msg-error"><?php echo $password_err; ?></span>

                    <label for="">Rol</label>
                    <p><input type="text" name="rol"></p>
                    <!-- <span class="msg-error"><?php //echo $password_err; ?></span> -->

                    <p><input type="submit" value="Iniciar Sesión"></p>
                    <div class="paginas">
                        <a class="atras1" href="../../index.php">╚► Volver a Página Principal</a>
                    </div>
                </form>
            </div>            
        </div>
    </body>
</html>
