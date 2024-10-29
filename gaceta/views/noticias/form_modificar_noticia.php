<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Noticia</title>
    <link rel="stylesheet" href="../../assets/css/formulario.css">
</head>
<body>

    <div class="img_container">
        <img src="../../assets/img/logo.png" alt="Logo" class="logo">
    </div>

    <h1 class="titulo_panel">Modificar las Noticias</h1>

    <div class="form_container">
        <?php 
            include '../../config/connection.php';

            // Traemos el ID de las noticias
            $id = $_POST['id']; //$_GET se usa para enviar por URL
            $sql = "SELECT * FROM `noticias` WHERE `id` = $id";
            $resultado = mysqli_query($conexion, $sql);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $noticia = mysqli_fetch_assoc($resultado);
            } else {
                echo "Noticia no encontrada.";
                exit;
            }
        ?>

        <form action="../../models/modificar_noticia.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $noticia['id']; ?>">

            <div class="form_group">
                <label for="carrera">La noticia es para la carrera</label>
                <select name="carrera" id="carrera">
                    <option value="General" <?php echo $noticia['carrera'] == 'General' ? 'selected' : ''; ?>>General</option>
                    <option value="Técnico/a Desarrollo de Software" <?php echo $noticia['carrera'] == 'Técnico/a Desarrollo de Software' ? 'selected' : ''; ?>>Técnico/a Desarrollo de Software</option>
                    <option value="Técnico/a Superior en Analisis de Sistemas" <?php echo $noticia['carrera'] == 'Técnico/a Superior en Analisis de Sistemas' ? 'selected' : ''; ?>>Técnico/a Superior en Analisis de Sistemas</option>
                </select>
            </div>
            
            <div class="form_group">
                <label for="Categoria">Categoría</label>
                <select name="Categoria" id="Categoria">
                <?php
                    $sql = "SELECT * FROM `categorias`";
                    $dato = mysqli_query($conexion, $sql);
                    while ($datos = mysqli_fetch_assoc($dato)) {
                        $selected = $noticia['categoria'] == $datos['id'] ? 'selected' : '';
                        echo "<option value='{$datos['id']}' $selected>{$datos['nombre']}</option>";
                    }
                ?>
                </select>
            </div>
            
            <div class="form_group">
                <label for="imagen">Ingrese la imagen de la noticia</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
            </div>

            <div class="form_group">
                <label for="documento">Agregar documento (Opcional)</label>
                <input type="file" id="documento" name="documento" accept="application/pdf">
            </div>

            <div class="form_group">
                <label for="titulo">Ingrese el Título de la noticia</label>
                <input type="text" name="titulo" id="titulo" value="<?php echo ($noticia['titulo']); ?>" required>
            </div>

            <div class="form_group">
                <label for="resumen">Ingrese un resumen de la noticia</label>
                <textarea name="resumen" id="resumen" rows="10" required><?php echo ($noticia['resumen']); ?></textarea>
                <!-- <input type="text" name="resumen" id="resumen" value="<?php echo ($noticia['resumen']); ?>" required> -->
            </div>

            <div class="form_group">
                <label for="contenido">Ingrese la noticia</label>
                <!-- <input type="text" name="contenido" id="contenido" value="<?php echo ($noticia['contenido']); ?>" required>
                  -->
                  <textarea name="contenido" id="contenido" rows="10" required><?php echo ($noticia['contenido']); ?></textarea>
            </div>

            <div class="container-botones">
                <a class="boton-volver" href="javascript:history.back();">Atrás</a>
                <button class="submit_button" type="submit">Modificar</button>                    
            </div>

            
        </form>
    </div>
    
</body>
</html>

