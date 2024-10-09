<?php
include("navegacion.php");
include("modal.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/e_iniciales.css">
  <link rel="stylesheet" href="css/estilos.css">
  <!-- <link rel="stylesheet" href="css/navegacion.css"> -->
  <link rel="stylesheet" href="css/modalStyle.css">
  <link rel="stylesheet" href="css/info.css">
  <title>Información Institucional</title>
</head>

<body>
  <br>
  <div class="container">
    <div class="titulo">
      <h2>Información Institucional</h2>
      <h4>Buscador por fecha de publicación</h4>
      <br>
      <div>
        <form action="" method="GET">
          <div class="#">
            <div class="#">
              <div class="primerDia">
                <label><b>Desde el Dia :</b></label>
                <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                  echo $_GET['from_date'];
                } ?>" class="form-control">
              </div>
              <?php
              //echo $_GET['from_date'];
              ?>
            </div>
            <div class="#">
              <div class="form-group">
                <label><b> Hasta el Dia :</b></label>
                <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                  echo $_GET['to_date'];
                } ?>" class="form-control">
                <?php
                //echo $_GET['to_date'];
                ?>
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
        <table class="tablaInicio" id="table_id">
          <tbody>
            <thead class="tabla">
              <tr class="titulosTabla"><br>
                <!-- <th> Nombre de Área </th> -->
                <th> Información </th>
                <th> Fecha Publicación </th>
              </tr>
            </thead>
            <?php
              include("session/conexion.php");
              // $conexion = mysqli_connect("localhost", "root", "", "ifts04");
              if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                
                $from_date = $_GET['from_date'];
                $to_date = $_GET['to_date'];
                $query = "SELECT user.mensaje, user.fecha_publicacion, user.estado FROM user
                                      WHERE fecha_publicacion BETWEEN '$from_date' AND '$to_date' ";
                //$query_run = mysqli_query($conn, $query);
                $query_run = $conn -> query($query);
                //echo "$from_date" . "$to_date";

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $fila) {
                    $fila['nombre_area'];
                    $fila['mensaje'];
                    $fila['fecha_publicacion'];
                    $fila['estado'];
                    /* SE CREARON LAS VARIABLES PARA PODER LLAMAR AL CAMPO 'estado' Y PODER VERIFICAR CUAL INFORMACIÓN ESTÁ APTA PARA MOSTRAR */
                    if($fila['estado']=='1'){
                    ?>
                    <tr>
                      <!-- <td class="nombre">
                        <?php //echo $fila['nombre_area']; ?>
                      </td> -->
                      <td class="mensaje">
                        <?php echo "-". $fila['mensaje']; ?>
                      </td>
                      <td class="fecha">
                        <?php echo $fila['fecha_publicacion']; ?>
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
                    <?php
                }
              }
              $conn->close();
              ?>
              <h3 class="volver">
                <a class="pPrincipal" href="../ifts04">╚► Volver Página Principal</a>
              </h3>
      </div>
</body>

</html>