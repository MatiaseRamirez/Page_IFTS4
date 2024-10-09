<?php

    if(!session_start()){
        # Si no está seteada la variable de sesión hago el session_start()
        session_start();
        session_name('INV');

    }

    # Si está seteado el tiempo del login me fijo si pasaron los 30 min, cierro la sesión y redirecciono al inicio
    if (isset($_SESSION["login_time_stamp"])) {
        if(time()-$_SESSION["login_time_stamp"] >1800) # 1800 son 30 min
        {
            session_unset();
            session_destroy();
            echo "<script>alert('La sesión ha expirado');window.location.href = 'index.php';</script>";
        }

    }

