<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/e_iniciales.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/navegacion.css">
    <link rel="stylesheet" href="../css/modalStyle.css">
    <link rel="stylesheet" href="../css/mod.css">
    <title>Modificar</title>
  </head>
  <?php
    include("navegacion_admin.php");
    include("modal_admin.php");
    // include("../header_publico.php");
    // $conexion = mysqli_connect("localhost:3306", "root", "", "ifts04");
    include("../session/conexion.php");
    // require("../2c2023-main/conexion/conexionDb.php");
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
      <body translate="no" class="bodyModificar" translate="no">
        <h1 class="tituloMod"> Modificación de Noticias</h1>
        <form class="formModificar" action="modificarDatos.php" method="post">
          <!-- <h2>id:</h2>(no habilitado para modificación)  <br> -->
          <table>
            <tr>
              <th hidden>
                <label for="idu" class="tit_ind">
                  Número de noticia ("Solo lectura")
                </lablel>
              </th>
              <td hidden>
                <input class="ind" type="text" readonly id="idu" name="idu" value="<?php echo $id ?>" >
              </td>
            </tr>
            <tr>
              <th>
                <!-- <h2>nombre area:</h2><br> -->
                <label for="area" class="tit_ind">Sector:</label>
              </th>
              <td>
                <input class="ind" type="text" name="area" id="area" value="<?php echo $area ?>">
              </td>
            </tr>
            <tr>
              <th>
                <!-- <h2>modificado por: (usuario)</h2><br> -->
                <label for="modificadoP" class="tit_ind">Modificado por:</label>
              </th>
              <td>
                <input class="ind" id="modificadoP" type="text" name="modificadoP" placeholder="Ingrese su nombre * (obligatorio)"  required>
                <!-- ( * ) Campo requerido para continuar -->
              </td>
            </tr>
            <tr>
              <th>
                  <!-- <h2>mensaje:</h2><br> -->
                <label for="mensaje" class="tit_ind">Noticia:</label><br>
              </th>
              <td>
                <div class="contenedorMensaje">
                <textarea name="mensaje" id="mensaje" rows="5" cols="61" ><?php echo $mensaje ?> </textarea>
                </div>
              </td>
            </tr>
            <tr>
              <th colspan="2">
                <input class="botonModificar" type="submit" value="Modificar">
              </th>
            </tr>
            <tr>
              <th colspan="2">
                <div class="modif">
                  <a class="modificarPublicacion" href="borrarMensaje.php">╚► Volver al Registro de publicaciones</a>
                </div>
              </th>
            </tr>
          </table>
        </form>
        <?php
    }
    $conn->close();
  ?>
  </body>
</html>