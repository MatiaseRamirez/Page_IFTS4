<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/navegacion.css">
    <link rel="stylesheet" href="../../../css/navegacion.css">
    <link rel="stylesheet" href="../../../css/estilos.css">

    <title>Noticias IFTS</title>
</head>
<body>
<?php 
    require '../../../admin/navegacion_admin.php';
?>

    <header>
        <h1 class="titulo-principal">Noticias</h1><br>
        <img class="logo" src="../../assets/img/logo.png" alt="logo-ifts">
    </header>

    <div class="noticias-container">

    <?php 
        include '../../config/connection.php';

        //Agregamos las variables de paginacion
        $datos_por_pagina = 6;
        
        //Se comprueba si existe el parametro pagina
        if (isset($_GET['pagina'])) {
            $pagina_actual = (int)$_GET['pagina']; //Se convierte el valor recibido por la URL a entero
        } else {
            $pagina_actual = 1;
        }

        //Calculamos cuantos registros se tienen que mostrar por pagina
        $offset = ($pagina_actual -1) * $datos_por_pagina;

        //Consulta para contar el toal de noticias
        $sql_datos_contados = "SELECT COUNT(*) as total FROM noticias";
        $sql_datos_contados_total = $conexion->query($sql_datos_contados);
        $row_total = $sql_datos_contados_total->fetch_assoc();
        //Guardamos el resultado de $sql_datos_contados en una variable
        $total_registros = $row_total['total'];
        //Redondeamos cuantas paginas se mostraran usando el metodo ceil
        $total_paginas = ceil($total_registros / $datos_por_pagina);

        // Consulta para obtener solo las paginas de la pagina actual
        $sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC LIMIT $offset, $datos_por_pagina";



        // Consulta para obtener noticias
        // $sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";
        $respuesta = $conexion->query($sql);

        $noticias = [];

        if ($respuesta && $respuesta->num_rows > 0) {
            while ($row = $respuesta->fetch_assoc()) {
                $noticias[] = $row;
            }
        } 

        $conexion->close();
    ?>
        
        <?php foreach ($noticias as $noticia): ?>

        <div class="noticia"> 
            <h2 class="noticia-carrera"><?php echo $noticia['carrera'];?></h2>

            <h1 class="noticia-titulo"><?php echo $noticia['titulo'];?></h1>
            <p class="noticia-resumen"><?php echo $noticia['resumen'];?></p>
            <a class="boton-leer-mas" href="../noticias/ver_noticias.php?id=<?php echo $noticia['id']; ?>" >Leer más</a>
        </div>

        <?php endforeach; ?>

    </div>

    <div class="paginacion">
        <?php 
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

    
</body>
</html>