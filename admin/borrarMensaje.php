<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/info.css">
  <title>Registro de publicaciones</title>
</head>
<body>
  <br>
  <div class="container">
    <div class="titulo">
      <h2>Registro de publicaciones</h2>
      <h4>Buscador por fecha de publicación</h4>
      <br>
      <div class="tablaGeneral">
        <form action="" method="GET">
          <div class="#">
            <div class="#">
              <div class="#">
                <label><b>Desde el Dia :</b></label>
                <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                  echo $_GET['from_date'];
                } ?>" class="form-control">
              </div>
            </div>
            <div class="#">
              <div class="form-group">
                <label><b> Hasta el Dia :</b></label>
                <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                  echo $_GET['to_date'];
                } ?>" class="form-control">
              </div>
            </div>
            <div class="#">
              <div class="form-group">
                <label><b></b></label> <br>
                <button type="submit" class="btnBuscar">Buscar</button>
              </div>
            </div>
          </div>
          <br>
        </form>
        <table class="tablaInicio" id="tabla_id">          
          <thead class="tabla">
            <tr class="titulosTabla">
              <br>
              <th> Número de Noticia </th>
              <th> Sector </th>
              <th> Noticia </th>
              <!-- <th> password </th> -->
              <th> Fecha de Publicación </th>
              <!-- <th> rol </th> -->
              <!-- <th> estado </th> -->
              <!-- <th> modificado_por </th> -->
              <th> Estado </th>
            </tr>
          </thead>
          <form class="id" action="modificar.php" method="post">
            Modificar Datos <br>
            <label for="idu"></label>
            <input class="#" type="text" placeholder="INGRESE EL ID  *" name="idu" id="idu" required><br>
            <input type="submit" value="CAMBIAR" class="boton">
          </form>
          <br><br>
            <form class="id" action="eliminarPublicacion.php" method="post">
              Eliminar Publicación <br>
              <label for="idu"></label>
              <input class="#" type="text" placeholder="INGRESE EL ID  *" name="idu" id="idu" required><br>
              <input type="submit" value="ELIMINAR" class="boton">
            </form>
            <?php
              // $conexion = mysqli_connect("localhost:3306", "root", "", "ifts04");
              include("../session/conexion.php");
              if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                $from_date = $_GET['from_date'];
                $to_date = $_GET['to_date'];
                $query = "SELECT * FROM user /*LEFT JOIN permisos ON user.rol = permisos.id*/ WHERE fecha_publicacion BETWEEN '$from_date' AND '$to_date' ";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $fila) {

                    $fila['id'];
                    $fila['nombre_area'];
                    $fila['mensaje'];
                    $fila['password'];
                    $fila['fecha_publicacion'];
                    $fila['rol'];
                    $fila['estado'];
                    $fila['modificado_por'];
                    $fila['accion'];

                    /* SE CREARON LAS VARIABLES PARA PODER LLAMAR AL CAMPO REQUERIDOS Y SE VUELCA LA INFORMACIÓN EN LAS VARIABLES '$fila' */

                    // echo $fila['nombre_area'];
                    if ($fila['nombre_area'] > 0) 
                    ?>
                    
                      <tbody class="tbody" > 
                    <?php 
                    {                    
                      ?>
                      <tr class="carga" >

                        <td class="id">
                          <?php echo $fila['id'];
                          // if ($fila > 0) {

                          // }
                          // ; 
                          ?>
                        </td>
                        <td class="nombreArea">
                          <?php echo $fila['nombre_area']; ?>
                        </td>
                        <td class="mensaje">
                          <!--<input id="casilla2" type="checkbox" name="casilla2" value="1">-->
                          <?php echo "-" . $fila['mensaje']; ?>
                        </td>
                        <td class="password" hidden>
                          <?php echo $fila['password']; ?>
                        </td>
                        <td class="fechaPublicacion">
                          <?php echo $fila['fecha_publicacion']; ?>
                        </td>
                        <td class="rol" hidden>
                          <?php echo $fila['rol']; ?>
                        </td>
                        <td class="estado" hidden>
                          <?php echo $fila['estado']; ?>
                        </td>
                        <td class="modificadoPor" hidden>
                          <?php echo $fila['modificado_por']; ?>
                        </td>
                        <td class="accion">
                          <?php echo $fila['accion']; ?>
                          <!--<a class="edit" type="checkbox" value='1' href="editDel.php">Edit/Del</a>-->
                        </td>

                      </tr>
                      <?php
                    }
                  }

                } else {
                  ?>
                  <tr>
                    <div>
                      <td>
                        <?php
                        $mensaje1 = "No se encontraron resultados";
                        $mensaje2 = '...para ver mensajes de hoy, ingrese en "Hasta el Día" la fecha de mañana.';
                        echo $mensaje1 . " " . " " . $mensaje2;
                        ?>
                      </td>
                    </div>
                  </tr>
                    <?php
                }
              }
              $conn->close();
            ?>
          </tbody>
          
        </tabla>
              <h3 class="volver"><br><br>
                <a class="pPrincipal" href="index.php">╚► Página Principal...</a><br><br>
                <a class="pPrincipal" href="administrador.php">╚► Ingreso Mensajes...</a>
              </h3>
      </div>

</body>

</html>