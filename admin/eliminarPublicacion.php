<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eliminar.css">
    <link rel="stylesheet" href="../css/e_iniciales.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- <link rel="stylesheet" href="../css/navegacion.css"> -->
    <link rel="stylesheet" href="../css/modalStyle.css">
    <title>Eliminar Publicación</title>
  </head>
  <?php
    include("navegacion_admin.php");
    include("modal_admin.php");
    // $conexion = mysqli_connect("localhost:3306", "root", "", "ifts04");
    // require("../2c2023-main/conexion/conexionDb.php");
    include("../session/conexion.php");
    $registro = $_POST['idu'];
    $sql = "SELECT * FROM user WHERE id = '$registro'";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows > 0) {
      $fila = mysqli_fetch_array($resultado);
      $id = $fila[0];
      $area = $fila[1];
      $mensaje = $fila[2];
      $password = $fila[3];
      $fechaPublicacion = $fila[4];
      $rol = $fila[5];
      $estado = $fila[6];
      $modificadoPor = $fila[7];
      $accion = $fila[8];
      ?>
      <body translate="no">
        <h1 class="tituloEli"> SISTEMA BAJA DE PUBLICACIÓN</h1>
        <form class="formularioEli" action="eliminarDatos.php" method="post">
          <table>
            <tr>
              <th>
                Número de noticia:
                <!-- <br> -->
              </th>
              <td>
                <input class="eli" type="text" readonly name="idu" value="<?php echo $id ?>">
                <!-- <br><br> -->
              </td>
            </tr>
            <tr>
              <th>
                Sector:
                <!-- <br> -->
              </th>
              <td>
                <input class="eli" type="text" readonly name="area" value="<?php echo $area ?>">
                <!-- <br><br> -->
              </td>
            </tr>
            <tr>
              <th>
                Noticia:
                <!-- <br> -->
              </th>
              <td>
                <textarea class="eli" readonly name="mensaje" id="mensaje" rows="5" cols="61" ><?php echo $mensaje ?> </textarea>
                <!-- <br> -->
                <!-- <br> -->
              </td>
            </tr>
            <tr>
              <th>
                Eliminada por:
                <!-- <br> -->
              </th>
              <td>
                <input class="eli" type="text" name="modificadoP" placeholder="Ingrese Nombre de Usuario * este es un campo obligatorio" required>
                <!-- <br>( * ) Campo requerido para continuar -->
                 <!-- <br> -->
              </td>
            </tr>
            <tr>
              <th>
                <input class="botonEli" type="submit" value="Eliminar">
              </th>
            </tr>
            <tr>
              <th>
                <div class="paginaEli"><br>
                  <a class="paginaAtrasEli" href="borrarMensaje.php">╚► Volver al Registro de publicaciones</a>
                </div>
              </th>
            </tr>
          </table>
        </form>
        <?php
    }
    $conn->close();
  ?>
    <!-- <br>
    <br> -->    
  </body>
</html>