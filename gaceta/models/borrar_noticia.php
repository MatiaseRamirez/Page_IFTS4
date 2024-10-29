<?php include '../config/connection.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Noticia</title>
    <style>
        .mensaje-exito {
            background-color: #06ad84; 
            color: white; 
            padding: 15px;
            border-radius: 5px;
            text-align: center; 
            margin: 20px 0; 
            font-size: 18px; 
            animation: fadeIn 0.5s; 
        }

        .mensaje-error {
            background-color: #ff4c4c;
            color: white; 
            padding: 15px; 
            border-radius: 5px; 
            text-align: center; 
            margin: 20px 0;
            font-size: 18px; 
            animation: fadeIn 0.5s; 
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

<?php
$id = $_POST['id'];

$sql = "DELETE FROM `noticias` WHERE `id` = $id";
$sql_cat = "DELETE FROM `noticias_categorias` WHERE `noticia_id` = $id";
$conexion->query($sql_cat);
if ($conexion->query($sql) === true) {
    echo "<div class='mensaje-exito'>Se borró la noticia correctamente.</div>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'http://localhost/PAGE_IFTS4/gaceta/views/panel/panel_profesor.php';
            }, 2000); // Vuelve atrás después de 2 segundos
          </script>";
} else {
    echo "<div class='mensaje-error'>Error: " . $conexion->error . "</div>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'http://localhost/PAGE_IFTS4/gaceta/views/panel/panel_profesor.php';
            }, 2000); // Vuelve atrás después de 2 segundos
          </script>";
}

$conexion->close();
?>

</body>
</html>
