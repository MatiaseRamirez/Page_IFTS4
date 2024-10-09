<?php
    // Incluir archivo de conexion a la base de datos
    require_once "conexion.php";
    // Definir variable e inicializar con valores vacio
    $rol = $username = $email = $password = "";
    $rol_err = $username_err = $email_err = $password_err = $mensaje = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // VALIDANDO INPUT DE NOMBRE DE USUARIO
        if(empty(trim($_POST["username"]))){
            $username_err = "Por favor, ingrese un nombre de usuario";
        }else{
            //prepara una declaracion de seleccion
            $sql = "SELECT Usuario_Id FROM usuarios WHERE Usuario_Nombre COLLATE utf8mb4_bin = ?";
            if($stmt = mysqli_prepare($conn, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = trim($_POST["username"]);
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "Este nombre de usuario ya está en uso";
                    }else{
                        $username = trim($_POST["username"]);

                        // echo "<script>alert('$username');</script>";
                    }
                }else{
                    $mensaje = "Ups! Algo salió mal, inténtalo mas tarde";
                }
            }
        }

        // VALIDANDO INPUT DEL ROL
        if(empty(trim($_POST["rol"]))){
            $rol_err = "Por favor, ingrese un numero de rol";
        }else{
            $rol = trim($_POST["rol"]);
        }

        // VALIDANDO INPUT DE EMAIL
        if (empty(trim($_POST["email"]))) {
            $email_err = "Por favor, ingrese un correo";
        } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
            $email_err = "Por favor, ingrese un correo electrónico válido";
        } else {
            // prepara una declaración de selección
            $sql = "SELECT Usuario_Id FROM usuarios WHERE Usuario_Email = ?";
            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                $param_email = trim($_POST["email"]);
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        $email_err = "Este correo ya está en uso";
                    } else {
                        $email = trim($_POST["email"]);
                    }
                } else {
                    $mensaje = "Ups! Algo salió mal, inténtalo más tarde";
                }
            }
        }
        // VALIDANDO CONTRASEÑA
        if (empty(trim($_POST["password"]))) {
            $password_err = "Por favor, ingrese una contraseña";
        } elseif (strlen(trim($_POST["password"])) < 8) {
            $password_err = "La contraseña debe tener al menos 8 caracteres";
        } elseif (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/', trim($_POST["password"]))) {
            $password_err = "La contraseña debe contener al menos una mayúscula, un número y un carácter especial";
        } else {
            $password = trim($_POST["password"]);
        }
        // COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
        if(empty($username_err) && empty($email_err) && empty($password_err) && empty($rol_err)){
            $sql = "INSERT INTO usuarios (Usuario_Nombre, Usuario_Email, Usuario_Clave, id_rol) VALUES (?, ?, ?, ?)";
            if($stmt = mysqli_prepare($conn, $sql)){
                mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_password, $rol);
                // echo $username, $email, $password;
                // ESTABLECIENDO PARAMETRO
                $param_username = $username;
                $param_email = $email;
                // ENCRIPTANDO CONTRASEÑA
                $param_password = password_hash($password, PASSWORD_DEFAULT);
                if(mysqli_stmt_execute($stmt)){
                    // header("location: index_profesional.php");
                    $mensaje = "El usuario se ha registrado exitósamente!!";
                }else{
                    $mensaje = "Algo Salio mal, intentalo despues";
                }
            }
        }
        mysqli_close($link);
    }
?>