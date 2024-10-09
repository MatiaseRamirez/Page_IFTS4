<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/elimDatos.css">
    <title>Eliminar Datos</title>
  </head>
  <body class="bodyEliminar" >
  <?php
    // $conexion = mysqli_connect("localhost:3306", "root", "", "ifts04");
    // require("../2c2023-main/conexion/conexionDb.php");
    include("../session/conexion.php");
    $id = $_POST['idu'];
    $area = $_POST['area'];
    $mensaje = $_POST['mensaje'];
    $modificadoP = $_POST['modificadoP'];
    $baja="0";
    $accion="baja";
    $sql = "UPDATE user SET nombre_area='$area',  
      estado='$baja', modificado_por='$modificadoP', accion='$accion' WHERE id = '$id'";
    if ($conn->query($sql) === true) {
      echo "Baja de la Publicación Exitosa !!!";
    } else {
      echo "Error...no se pudo realizar la baja de la publicación.InIntente nuevamente más tarde.";
    }
    $conn->close();
  ?>
  <!--  <br> -->
  <br>
  <a class="eliminarDatos" href="../admin/index.php">╚► Página Principal...</a>
  <br>
  <a class="eliminarDatos" href="borrarMensaje.php">╚► Volver al Registro de Publicaciones</a>
  </body>
</html>