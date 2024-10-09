<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal Informativo</title>
</head>

<body>
  <!-- Boton Modal -->
  <div class="boton-modal">
    <label for="btn-modal">
      Novedades Institucional IFTS4
    </label>
  </div>
  <!-- Fin Boton Modal -->

  <!-- Ventana Modal -->
  <input type="checkbox" id="btn-modal">
  <div class="container-modal">
    <div class="content-modal">
      <h2> Bienvenido </h2>
      <a class="adm" href="../admin/administrador.php">* Área administrativa.</a>
      <p>En esta sección encontrará toda la información institucional disponible y actualizada, la misma se presenta
        mediante la solicitud por fecha que se encuentra a su disposición ingresando en el enlace que se encuentra
        debajo.</p>
      <p>También, le dejamos a disposición los números habilitados para atención administrativa: <br>
        Celular; 11 4444-5555<br>
        Tel. linea; 5455-2223</p>
      <h1><a href="../admin/infoInstitucional_admin.php">Enlace Informativo</a></h1>
      <div class="btn-cerrar">
        <label for="btn-modal"> Cerrar </label>
      </div>
    </div>
    <label for="btn-modal" class="cerrar-modal"></label>
  </div>
  <!-- Fin Ventana Modal -->
</body>

</html>