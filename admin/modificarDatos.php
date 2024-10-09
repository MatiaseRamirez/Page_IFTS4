<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/e_iniciales.css"> -->
    <!-- <link rel="stylesheet" href="../css/estilos.css"> -->
    <!-- <link rel="stylesheet" href="../css/navegacion.css"> -->
    <!-- <link rel="stylesheet" href="../css/modalStyle.css"> -->
    <link rel="stylesheet" href="../modificarDatos.css">
    <link rel="stylesheet" href="../mod.css">
    <title>Modificar Noticias</title>
  </head>
  <style>
    body{
      /* background-color: lavenderblush; */
      background-color: #f1f1f1;
      margin: 4rem;
      margin-left: 32%;
      font-size: 3.2rem;
    }
    .modificarDatos{
        text-decoration: none;
      }
    .modificarDatos2{
        text-decoration: none;
      }
    .modificarDatos:hover{
      font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      width: 30rem;
      background-color: burlywood;
      color: black;
      transition: all 1.3s linear;
    }
    .modificarDatos2:hover{
      font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
      width: 35rem;
      background-color: burlywood;
      color: black;
      transition: all 1.3s linear;
    }

  </style>

  <body class="modificar">
    <?php
      // include("navegacion_admin.php");
      // include("../header_publico.php");
      // include("modal_admin.php");
      // require("../conexion/conexionDb.php");
      include("../session/conexion.php");
      $id = $_POST['idu'];
      $area = $_POST['area'];
      $mensaje = $_POST['mensaje'];
      $modificadoP = $_POST['modificadoP'];
      $sql = "UPDATE user SET nombre_area='$area', 
      mensaje='$mensaje',
      modificado_por='$modificadoP' WHERE id = '$id'";
      if ($conn->query($sql) === true) { ?>
        <h1 id="textoModificado">
          <?php echo "Modificación Exitosa. "; ?>
        </h1>
        <?php
      } else {
        echo "Error...no se pudo modificar campos seleccionados.\nIntente nuevamente más tarde.";
      }
      $conn->close();
    ?>
    <!-- <br><br> -->
    <a class="modificarDatos" href="../admin/index.php">╚► Página Principal...</a>
    <br><br>
    <a class="modificarDatos2" href="borrarMensaje.php">╚► Registro de publicaciones</a>
  </body>
</html>