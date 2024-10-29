<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/ver_noticias.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <title>Noticias IFTS</title>
</head>
<body>
    <header>
        <h1 class="titulo-principal">Ver Noticias</h1>
        <br>
        <img class="logo" src="../../assets/img/logo.png" alt="logo-ifts">
    </header>

    <div class="noticia-detalle">
        <?php 
        include "../../config/connection.php";

        // Verifica si se ha pasado un ID de noticia por la URL.
        if (isset($_GET['id'])) {
            $id_noticia = $_GET['id'];

            $sql = "SELECT noticias.titulo, noticias.fecha_publicacion, noticias.carrera ,noticias.contenido, noticias.imagen, noticias.documento, noticias.profesor_id ,categorias.nombre AS categoria
            FROM noticias
            JOIN noticias_categorias ON noticias.id = noticias_categorias.noticia_id
            JOIN categorias ON noticias_categorias.categoria_id = categorias.id
            WHERE noticias.id =  $id_noticia";       

            $resultado = $conexion->query($sql);

            // si se encontraron resultados.
            if ($resultado && $resultado->num_rows > 0) {
                // Obtiene la noticia.
                $noticia = $resultado->fetch_assoc();
              ?>
                <h2 class="noticia-titulo"><?php echo ($noticia['titulo']); ?></h2>
                <p class="noticia-fecha">Fecha: <?php echo ($noticia['fecha_publicacion']); ?></p>
                <p class="noticia-autor"><strong>Autor: </strong><?php echo ($noticia['profesor_id']); ?></p>
                <p class="noticia-carrera"><strong>Para la carrera:</strong> <?php echo ($noticia['carrera']); ?></p>
                <p class="noticia-categoria"><strong>Categoría:</strong> <?php echo ($noticia['categoria']); ?></p>

                <?php if ($noticia['imagen']!==" ") { ?>
                    <img src="../../assets/img/noticias/<?php echo ($noticia['imagen']); ?>" alt="Imagen de la noticia" class="noticia-imagen">
                <?php
                } ?>
                    
                <p class="noticia-contenido"><?php echo (($noticia['contenido'])); ?></p>

                <!-- Validacion para ver si hay documento que muestre el boton  -->
                <?php if (!empty($noticia['documento'])): ?>
                    <a class="boton-documento" href="../../assets/docs/noticias/<?php echo ($noticia['documento']); ?>" target="_blank">Ver Documento</a>
                <?php endif; ?>
                
                <a class="boton-volver" href="../panel/vista_general_noticias.php">Volver Atrás</a>
                <?php
            } 
        }

        $conexion->close();
        ?>
    </div>
</body>
</html>


s