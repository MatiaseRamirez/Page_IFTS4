<?php
    include("session.php");
    # Si la sesión está iniciada almaceno el nombre de usuario y pongo en true la sesón para usar en javascript sino las pongo en vacío y 0 respectivamente
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        $session = 1;
        $nomUsuario = $_SESSION['usuario'];
    }else{
        $session = 0;
        $nomUsuario = "";
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navegación</title>
        <link rel="shortcut icon" href="img/favi.ico" />
        <link rel="stylesheet" href="css/e_iniciales.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- inicio barra de navegación -->
        <div class="site-nav">
            <nav class="navegacion">
                <a id="bienvenida" class="nombre-usuario-bienvenida"></a>
                <a>
                    <span id="main1" style="font-size:20px;cursor:pointer color;color:#09344b" onclick="openNav()"> &#9776;
                    </span>
                </a>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" style="font-size:50px;cursor:pointer color;color:#09344b" onclick="closeNav()">
                        &times;
                    </a>
                    <div id="menu_usuario">
                        <a href="datos_institucion.php">
                            Ingreso de Centros Afiliados
                        </a>
                        <a href="datos_paciente.php">
                            Ingreso de los datos de Persona al RAR PC
                        </a>
                        <a href="formulario_mapa.php">
                            Subir imágen del Mapa
                        </a>
                        <a href="registrar.php">
                            Registrar un nuevo Profesional
                        </a>
                        <a href="alta_paciente_excel.php">
                            Ingreso de Personas con PC desde un Excel
                        </a>
                        <a href="cierre.php">
                            Cierre de sesión
                        </a>
                        <h4 style="text-align:center">
                            Instructivos
                        </h4>
                        <a href="img/001_Instructivo_Ingreso_de_Instituciones.pdf" target="_blank">
                            Ingreso de Instituciones
                        </a>
                        <a href="img/002_Instructivo_Modificacion_de_Instituciones.pdf" target="_blank">
                            Modificación de Instituciones
                        </a><a href="img/003_Instructivo_Suspension_de_Instituciones.pdf" target="_blank">
                            Suspensión de Instituciones
                        </a>
                        <a href="img/004_Instructivo_Reemplazo Imagen_Mapa.pdf" target="_blank">
                            Reemplazo de la imagen del Mapa de Instituciones
                        </a>
                        <a href="img/005_Instructivo_Lectura_Pacientes_CSV.pdf" target="_blank">
                            Lectura de Pacientes desde un CSV
                        </a>
                        <a href="img/006_Instructivo_Ingreso_Pacientes.pdf" target="_blank">
                            Ingreso de Pacientes
                        </a>
                        <a href="img/007_Instructivo_Modificacion_Pacientes.pdf" target="_blank">
                            Modificacion de Pacientes
                        </a>
                        <a href="img/008_Instructivo_Suspension_Pacientes.pdf" target="_blank">
                            Suspensión de Pacientes
                        </a>
                        <a href="img/009_Instructivo_Creacion_Usuario_Profesional.pdf" target="_blank">
                            Creación Usuario de un profesional
                        </a>
                        <a href="img/010_Instructivo_Consulta_Pacientes_Inscriptos.pdf" target="_blank">
                            Consulta de pacientes Inscriptos
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- fin barra de navagación -->
    </body>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <!-- Script que se ejecuta al caregar la página -->
    <script>
        // Al cargar la página me fijo si la sesión está iniciada
        $(document).ready(function(){

            // Obtengo los valores php para usarlos con javascript
            let session = <?php echo $session;?>;
            let nombreUsuario = '<?php echo "$nomUsuario";?>';

            // Si la sesión no está iniciada escondo el mensaje de bienvenida y el menú de usuario.
            // Si la sesión está iniciada escondo el menú del paciente e imprimo el nombre de usuario
            if (session == 0) {
                $('#bienvenida').hide();
                $('#menu_usuario').hide();
            }else{
                $('#menu_paciente').hide();
                document.getElementById('bienvenida').innerHTML='Bienvenido!  ' + nombreUsuario;
            }
        });

    </script>
</html>