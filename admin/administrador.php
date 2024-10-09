<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/administrador.css">
  <link rel="stylesheet" href="../css/e_iniciales.css">
  <link rel="stylesheet" href="../css/estilos.css">
  <!-- <link rel="stylesheet" href="../css/navegacion.css"> -->  
  <link rel="stylesheet" href="../css/mod.css">
  <link rel="stylesheet" href="../css/modalStyle.css">  
  <title>Alta Nueva Información</title>
</head>
<?php
include("navegacion_admin.php");
include("modal_admin.php");
// include("../header_publico.php");
/* COMIENZO DE INSERCIÓN DE INFORMACIÓN INGRESADOS POR FORMULARIO PARA REGISTRARSE EN BASE DE DATOS */
if (isset($_POST['area']) < 0) {
  echo "INGRESE DATOS";
}
/* INICIO DE VERIFICACIÓN DE EXISTENCIA DE USUARIO MEDIANTE DOS PARÁMETROS, POR PASSWORD Y POR N° DE USUARIO - Y SE PROCEDE A CARGAR MENSAJE*/
if (isset($_POST['area']) > 0) {
  $area = $_POST['area'];
  //echo $area;
  $mensaje = $_POST['mensaje'];
  //echo $mensaje;
  $passw = $_POST['pass'];
  //echo $passw;
  /* $passwCifrado=password_hash($passw, PASSWORD_DEFAULT); ESTO ES DE LA LIBRERÍA DE PHP PARA CIFRAR LA CONTRASEÑA CON TODA LA 'ARENA' GENERADA AUTOMÁTICAMENTE */
  $usuario = $_POST['usuario'];
  //echo $usuario;
  $estado = "1";
  //echo $estado;
  $accion = "publicado";
  //echo $accion;
  //$conn = mysqli_connect("localhost:3306", "root", "", "ifts04");
  // require ("../ifts04/conexion/conexionDb.php ");
  include("../session/conexion.php");
  $validar = "SELECT * FROM permisos WHERE password = $passw and id = $usuario ";
  //echo $validar;
  $validando = $conn->query($validar);
  if ($validando->num_rows > 0) {
    $sql = "INSERT INTO `user` (`id`, `nombre_area`, `mensaje`, `password`, `fecha_publicacion`, `rol`, `estado`, `accion` ) 
    VALUES (NULL, '$area', '$mensaje.', '$passw', current_timestamp(), '$usuario', '$estado', '$accion')"; /* UNA VEZ UTILIZADO LA LIBRERÍA DE CIFRADO AUTOMÁTICO, SE DEBE CAMBIAR $passw POR $passwCifrado Y QUE GUARDE DE MANERA CIFRADA TODAS LAS PASSWORD INGRESADAS */
    $guardando = $conn->query($sql);
    ?>
    <h1 class="leyenda"> Carga de mensaje exitosa !!!</h1><br>
    <h2>continúe operando...</h2><br>
    <?php
  } else { ?>
    <h1 id="leyenda"> Ingreso Incorrecto....<br> Verifique Logín ('Password, N°Rol')...</h1><br>
    <?php
  }
  $conn->close();
}
/** FIN DE CARGA DE INFORMACIÓN A LA BASE DE DATOS Y CIERRE DE CONEXIÓN */
?>
<!-- INICIO DE FORMULARIO PARA CARGAR INFORMACIÓN A LA BASE DE DATOS -->

<body translate="no">
  <h4 class="tituloIng">SISTEMA INFORMATIVO</h4>
  <form class="formularioIng" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><br>
    ( * ) Campos requeridos<br>
      <!-- <i class="fa fa-unlock-alt" id="accionPassword"></i> -->
      <input class="ing" type="password" placeholder="Password   *" name="pass" id="miClave" required>
      <br>
      <br>
      <input class="ing" type="text" placeholder="N° Rol   *" name="usuario" id="" required>
      <br>
      <br>
      <input class="ing" type="text" placeholder="Área Institucional   *" name="area" id="" required>
      <br>
      <br>
      <textarea class="ingM" placeholder="Escriba Mensaje a publicar...   *" name="mensaje" rows="5" cols="61" required ></textarea>
    <br>
    <input type="submit" value="INGRESO" class="botonIng">
    <br>
    <br>
    <div class="paginas">
      <a class="atras1" href="../admin/index.php">╚► Volver a Página Principal</a>
      <br>
      <br>
      <a class="atras2" href="borrarMensaje.php">╚► Eliminar/Editar</a>
      <br>
      <br>
      <br>
    </div>
  </form>
<!-- FIN DE FORMULARIO PARA CARGAR INFORMACIÓN A LA BASE DE DATOS Y/O VOLVER A LA PÁGINA PRINCIPAL-->
  <!-- <script>

    $('#accionPassword').click(function () {
      let clave = $("input#miClave").val();
      let tipoinput = document.querySelector('#miClave');

      console.log('La Clave es: ' + clave + 'Tipo de input' + tipoinput);

      if (tipoinput.type === 'password') {
        tipoinput.type = "text";
      } else {
        tipoinput.type = 'password';
        $('#accionPassword').removeClass('addbold');
      }
    })
  </script> -->

</body>

</html>