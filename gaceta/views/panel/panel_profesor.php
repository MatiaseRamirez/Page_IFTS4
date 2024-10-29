<?php
include '../../config/connection.php';

// Variables de paginación
$datos_por_pagina = 3; // Número de noticias por página
//Se comprueba si existe el parametro pagina
if (isset($_GET['pagina'])) {
    $pagina_actual = (int)$_GET['pagina']; //Se convierte el valor recibido por la URL a entero
} else {
    $pagina_actual = 1;
}

//Calculamos cuantos registros se tienen que mostrar por pagina
$offset = ($pagina_actual -1) * $datos_por_pagina;

// Consulta para contar el número total de noticias
$sql_count = "SELECT COUNT(*) as total FROM noticias";
$result_count = mysqli_query($conexion, $sql_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_noticias = $row_count['total']; // Total de noticias

// Consulta para obtener las noticias con limitación por página
$sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC LIMIT $offset, $datos_por_pagina";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Profesores</title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/formulario.css">
    <link rel="stylesheet" href="../../../css/navegacion.css">

</head>
<body>
<?php 
    require '../../../admin/navegacion_admin.php';
?>
<!-- ACA COMIENTA EL PANEL DEL PROFESOR  -->
    <header>
        <h1 class="titulo-principal">Editor de Noticias</h1>
        <img class="logo" src="../../assets/img/logo.png" alt="logo-ifts">
    </header>

    <h1 class="titulo_panel">Panel de Profesores</h1>

    <div class="form_container">

        <div class="container-botones">
            <a href="../noticias/form_agregar_noticia.php" class="boton_agregar" style="display: inline-block;">Agregar Noticia</a>
        </div>

        
            <div class="form_group">
                <label>Noticias Publicadas: <span><?php echo $total_noticias; ?></span></label><br>
                <ul>
                    <?php
                    if ($total_noticias > 0) {
                        while ($noticia = $resultado->fetch_assoc()) { ?>
                            <li class="noticia_item">
                                <div class="noticia-fecha"><strong>Fecha de Publicación: </strong><?php echo ($noticia['fecha_publicacion']); ?></div><br><br>
                                <div class="noticia_titulo"><?php echo $noticia['titulo']; ?></div>
                                <div class="noticia_contenido"><strong>Contenido:</strong> <?php echo $noticia['contenido']; ?></div>
                                <div class="noticia_contenido"><strong>Resumen:</strong> <?php echo $noticia['resumen']; ?></div>

                                <?php if ($noticia['imagen']!==" ") { ?>
                                <div class="noticia_contenido"><strong>Imagen:</strong>
                                    <img src="../../assets/img/noticias/<?php echo ($noticia['imagen']); ?>" alt="<?php echo ($noticia['imagen']); ?>" class="noticia-imagen"></div>
                              
                                <?php }  ?>
                                    <div class="noticia-autor"><strong>Autor: </strong><?php echo ($noticia['profesor_id']); ?></div><br>
                                
                                <div class="container-botones">
                                    <a class="boton-volver" href="#">Atrás</a> <!-- Ver a donde redirigir -->

                                    <form action="../../models/borrar_noticia.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $noticia['id']; ?>">
                                        <button type="submit" class="boton_cancelar">Borrar</button>
                                    </form>

                                    <form action="../../views/noticias/form_modificar_noticia.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $noticia['id']; ?>">
                                        <button type="submit" class="boton_modificar">Modificar</button>
                                    </form> 
                                </div>
                                
                            </li>
                        <?php
                        }
                    } else {
                        echo "<li>No hay noticias disponibles</li>";
                    }
                    ?>
                </ul>
            </div>


        <div class="paginacion">
            <?php 
            $total_paginas = ceil($total_noticias / $datos_por_pagina); // Usamos metodo ceil para redondear hacia arriba
            
            // Mostrar botones de paginación limitados a 5
            $rango = 2; // Número de botones a mostrar a cada lado de la página actual
            $inicio = max(1, $pagina_actual - $rango); // Página inicial
            $fin = min($total_paginas, $pagina_actual + $rango); // Página final

            if ($inicio > 1) {
                echo '<a href="?pagina=1">1</a>';
                if ($inicio > 2) echo '...'; // Indica que hay más páginas
            }

            for ($i = $inicio; $i <= $fin; $i++): ?>
                <a href="?pagina=<?php echo $i; ?>" class="<?php echo ($i == $pagina_actual) ? 'activo' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor;

            if ($fin < $total_paginas) {
                if ($fin < $total_paginas - 1) echo '...'; // Indica que hay más páginas
                echo '<a href="?pagina=' . $total_paginas . '">' . $total_paginas . '</a>';
            }
            ?>
        </div>

    </div>
</body>
</html>

