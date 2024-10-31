<?php
include '../config/connection.php';
date_default_timezone_set('America/Argentina/Buenos_Aires');
session_start();

$carrera = $_POST['carrera'];
$Categoria = $_POST['Categoria']; 
$titulo = $_POST['titulo']; 
$contenido = $_POST['contenido'];
$resumen = $_POST['resumen'];
$nueva_categoria=$_POST['null_categoria'];
//$documento = $_FILES['documento'];  // Aca se tiene que cambiar a variable $imagen = $_FILES['documento'];
$fecha_publicacion = date("y-m-d H:i:s");
//$profesor_id = $_SESSION["id"];
$profesor_id = 2;
// variable para imagen 
$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamanio_imagen = $_FILES['imagen']['size'];

// variable para documento 
$nombre_doc = $_FILES['documento']['name'];
$tipo_doc = $_FILES['documento']['type'];
$tamanio_doc = $_FILES['documento']['size'];

// validacion de nueva categoria 
if (!empty($nueva_categoria)) {
    $stmt = $conexion->prepare("SELECT id FROM categorias WHERE nombre = ?");
    $stmt->bind_param("s", $nueva_categoria); // 's' indica que el parámetro es una cadena de texto
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) { 
       
        $fila = $resultado->fetch_assoc();
        echo "La Categoria ya está registrado en la base de datos con el id :".$fila['id'];
         $Categoria=$fila['id'];
    } else {
        echo "La categoria no está registrado.<BR>";
        echo "Creando categoria ".$nueva_categoria;
        $query_categoria =  "INSERT INTO `categorias` (`id`, `nombre`) VALUES (NULL, '$nueva_categoria')";
        if($conexion->query($query_categoria) ===true){
            echo "<br>Se Creo la categoria<BR>";
            $Categoria = $conexion->insert_id;
        }else{
            echo "<BR>hay un error <BR>".$conexion->error;
        };        
    }
}else {
        echo "El correo no está registrado.";
    
}



//// Verifica que el tamaño de la imagen sea válido
if ($tamanio_imagen <= 2000000) {

    // Verifica que el tipo de archivo sea permitido
    if ($tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif" || $tipo_imagen == "image/jpeg") {

        // Define la carpeta de destino
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'PAGE_IFTS4/gaceta/assets/img/noticias/';
        $carpeta_destino = addslashes($carpeta_destino);

        // Mueve la imagen al destino
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);

        echo "Se guardó la imagen correctamente";
    } else {
        echo "Tipo de archivo inválido";
    }
} else {
    echo "Tamaño muy grande de imagen";
}

//// Verifica que el tamaño de la documento sea válido
if ($tamanio_doc <= 15000000) {

    // Verifica que el tipo de archivo sea permitido
    if ($tipo_doc == "application/pdf") {

        // Define la carpeta de destino
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . 'PAGE_IFTS4/gaceta/assets/docs/noticias/';
        $carpeta_destino = addslashes($carpeta_destino);

        // Mueve la imagen al destino
        move_uploaded_file($_FILES['documento']['tmp_name'], $carpeta_destino . $nombre_doc);

        echo "Se guardó la documento correctamente";

       
    } else {
        echo "Tipo de archivo inválido";
    }
} else {
    echo "Tamaño muy grande de documento";
}

echo $carrera."<br>";
echo $Categoria."<br>";
echo $titulo."<br>"; 
echo $contenido."<br>";
echo $resumen ."<br>";
echo $fecha_publicacion ."<br>";
echo $profesor_id ."<br>";

$query_noticia =  "INSERT INTO `noticias`
        (`id`, `carrera`, `titulo`,
        `contenido`, `resumen`, `fecha_publicacion`,
        `imagen`, `Documento`, `profesor_id`) 
        VALUES (NULL, '$carrera', '$titulo', '$contenido', '$resumen',
        '$fecha_publicacion', '$nombre_imagen ', '$nombre_doc', '$profesor_id');";



if($conexion->query($query_noticia) ===true){
         header('location: http://localhost/PAGE_IFTS4/gaceta/views/panel/panel_profesor.php');

        echo "Se Creo la noticia";
        $ultimo_id_noticia = $conexion->insert_id;
    }else{
        echo "hay un error ".$conexion->error;
    };


$query_categoria =  "INSERT INTO `noticias_categorias` 
                    (`noticia_id`, `categoria_id`)
                     VALUES ('$ultimo_id_noticia', '$Categoria');;";

if($conexion->query($query_categoria) ===true){
    echo "Se registro la categoria de noticia";
}else{
    echo "hay un error ".$conexion->error;
};

    
    $conexion->close();

?>