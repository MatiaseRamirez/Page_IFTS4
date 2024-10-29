<?php 
include '../config/connection.php';

if ($_POST) {
    $id = $_POST['id'];
    $carrera = $_POST['carrera'];
    $categoria_id = $_POST['Categoria'];
    $titulo = $_POST['titulo'];
    $contenido  = $_POST['contenido'];
    $resumen = $_POST['resumen'];

    // Actualiza la noticia
    $sql = "UPDATE `noticias` SET 
                `carrera` = '$carrera', 
                `titulo` = '$titulo', 
                `contenido` = '$contenido', 
                `resumen` = '$resumen' 
            WHERE `id` = $id";

    if ($conexion->query($sql) === true) {
        $sql_categoria = "UPDATE `noticias_categorias` 
                          SET `categoria_id` = $categoria_id 
                          WHERE `noticia_id` = $id";
        
        if ($conexion->query($sql_categoria) === false) {
            echo "<div class='mensaje-error'>Error al actualizar la categoría: " . $conexion->error . "</div>";
        } else {
            echo "<div class='mensaje-exito'>Noticia modificada correctamente.</div>";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'http://localhost/gaceta/views/panel/panel_profesor.php';
                    }, 2000); // Vuelve atrás después de 2 segundos
                  </script>";
        }
    } 
}

$conexion->close();
?>

<style>
    .mensaje-exito, .mensaje-error {
        display: flex;
        flex-direction: row;
        justify-content: center; 
        align-items: center;
        width: 300px;
        background-color: #06ad84;
        color: white; 
        padding: 15px; 
        border-radius: 5px; 
        text-align: center; 
        margin: 20px auto; 
        font-size: 18px;
        animation: fadeIn 0.5s;
    }

    .mensaje-error {
        background-color: #ff4c4c; 
    }
</style>

