<?php
    require_once("session.php"); # Agrego el session_start().
    //INICIALIZAR LA SESION
    /* Si el inicio de sesion es correcto lleva a la pagina index_profesional.php*/
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: ../admin/index.php");
        exit;
    }
    /* llama a la conexion*/
    require_once "conexion.php";
    /* declaro las variables vacias*/
    $email = $password ="";
    $email_err = $password_err = "";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        /*quito los espacios vacios, si esta en blanco, envio mensaje de error, sino recibo en una variable el usuario quitando los espacios en blanco */
        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese el correo electronico";
        }else{
            $email = trim($_POST["email"]);
        }
        /*quito los espacios vacios de la contraseña, si esta en blanco, envio mensaje de error, sino recibo en una variable quitando los espacios en blanco */
        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, ingrese una contraseña";
        }else{
            $password = trim($_POST["password"]);
        }
        //VALIDAR CREDENCIALES
        /*si las variables no estan vacias, pasala consulta a una variable */
        if(empty($email_err) && empty($password_err)){
        //Error en esta linea => // $sql = "SELECT Usuario_Id, Usuario_Nombre, Usuario_Email, Usuario_Clave FROM usuarios WHERE Usuario_Habilitado = 0 AND Usuario_Email = ?";
            
            /*si recibe datos, en una variable pasa la conexion y la consulta */
            if($stmt = mysqli_prepare($conn, $sql)){
                /* machea el interrogante con la variable*/
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                $param_email = $email;
                /*si esta correcto ejecuta la consulta */
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                }
                /*si tiene al menos un registro, recorre el resultset, hashea la contraseña, y abre sesion */
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // ALMACENAR DATOS EN VARABLES DE SESION
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id; //id
                            $_SESSION["email"] = $email; //email
                            $_SESSION["usuario"] = $usuario; //usuario
                            $_SESSION["login_time_stamp"] = time(); // Seteo el tiempo en el que se inicia sesión para controlar el tiempo de expiración.
                            /* validar el tipo de usuario con un switch*/
                            header("location: ../session/login.php");
                            exit();
                        }else{
                            $password_err = "La contraseña que has introducido no es valida";
                        }
                    }
                }else{
                    $email_err = "No se ha encontrado ninguna cuenta con ese correo electronico.";
                }
            }else{
                echo "UPS! algo salio mal, intentalo más tarde";
            }
        }
        // mysqli_close($link);
        mysqli_close($conn);
    }
?>