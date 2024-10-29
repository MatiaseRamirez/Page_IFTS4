<?php

// Conexión a la base de datos
$DB_HOST = "127.0.0.1";
$DB_USUARIO = "root";
$DB_PASS = "";
$dbname = "noticias_ifts";

$conn = new mysqli($DB_HOST, $DB_USUARIO, $DB_PASS);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa<br>";
}

// Crear la base de datos
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

// Conectar a la base de datos
$conexion = new mysqli($DB_HOST, $DB_USUARIO, $DB_PASS, $dbname);

// Crear tabla Profesores
$sql = "CREATE TABLE IF NOT EXISTS profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    dni VARCHAR(20) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla profesores creada exitosamente<br>";
} else {
    echo "Error al crear la tabla profesores: " . $conexion->error;
}

// Crear tabla Noticias
$sql = "CREATE TABLE IF NOT EXISTS noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carrera text NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    contenido TEXT NOT NULL,
    resumen text NOT NULL,
    fecha_publicacion DATETIME NOT NULL,
    imagen VARCHAR(255) DEFAULT NULL,
    Documento varchar(255) DEFAULT NULL,
    profesor_id INT,
    FOREIGN KEY (profesor_id) REFERENCES profesores(id)
);";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla noticias creada exitosamente<br>";
} else {
    echo "Error al crear la tabla noticias: " . $conexion->error;
}

// Crear tabla Categorías
$sql = "CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla categorias creada exitosamente<br>";
} else {
    echo "Error al crear la tabla categorias: " . $conexion->error;
}

// Crear tabla Noticias_Categorías
$sql = "CREATE TABLE IF NOT EXISTS noticias_categorias (
    noticia_id INT,
    categoria_id INT,
    FOREIGN KEY (noticia_id) REFERENCES noticias(id)  ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)  ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (noticia_id, categoria_id)
);";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla noticias_categorias creada exitosamente<br>";
} else {
    echo "Error al crear la tabla noticias_categorias: " . $conexion->error;
}

// Insertar Profesores
$sql = "INSERT INTO profesores (nombre, apellido, dni, email, password) VALUES
('Juan', 'Pérez', '12345678A', 'juan.perez@example.com', 'password1'),
('Ana', 'Gómez', '23456789B', 'ana.gomez@example.com', 'password2')
ON DUPLICATE KEY UPDATE id=id;"; // Evitar errores si ya existen
if ($conexion->query($sql) === TRUE) {
    echo "Profesores insertados exitosamente<br>";
} else {
    echo "Error al insertar profesores: " . $conexion->error;
}

// Insertar Categorías
$sql = "INSERT INTO categorias (nombre) VALUES
('Ciencia'),
('Tecnología'),
('Deportes')
ON DUPLICATE KEY UPDATE id=id;"; // Evitar errores si ya existen
if ($conexion->query($sql) === TRUE) {
    echo "Categorías insertadas exitosamente<br>";
} else {
    echo "Error al insertar categorías: " . $conexion->error;
}

// Insertar Noticias
$sql = "INSERT INTO noticias (titulo, contenido, fecha_publicacion, profesor_id) VALUES
('Avances en Inteligencia Artificial', 'Los últimos avances en IA son sorprendentes.', NOW(), 1),
('Nuevas tecnologías en educación', 'Las tecnologías están revolucionando la educación.', NOW(), 2)
ON DUPLICATE KEY UPDATE id=id;"; // Evitar errores si ya existen
if ($conexion->query($sql) === TRUE) {
    echo "Noticias insertadas exitosamente<br>";
} else {
    echo "Error al insertar noticias: " . $conexion->error;
}

// Relacionar Noticias con Categorías
$sql = "INSERT INTO noticias_categorias (noticia_id, categoria_id) VALUES
(1, 1),  -- 'Avances en Inteligencia Artificial' en 'Ciencia'
(1, 2),  -- 'Avances en Inteligencia Artificial' en 'Tecnología'
(2, 2)   -- 'Nuevas tecnologías en educación' en 'Tecnología'
ON DUPLICATE KEY UPDATE noticia_id=noticia_id;"; // Evitar errores si ya existen
if ($conexion->query($sql) === TRUE) {
    echo "Relaciones entre noticias y categorías creadas exitosamente<br>";
} else {
    echo "Error al crear relaciones entre noticias y categorías: " . $conexion->error;
}


// $sql = "ALTER TABLE `noticias_categorias`
//   ADD CONSTRAINT `categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
//   ADD CONSTRAINT `id_noticia` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;";

// if ($conexion->query($sql) === TRUE) {
//     echo "Relaciones entre noticias y categorías creadas exitosamente<br>";
// } else {
//     echo "Error al crear relaciones entre noticias y categorías: " . $conexion->error;
// }




$conn->close();
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Finalizo la creacion de la base de datos.</h3>
    <button type="button" onclick="window.location.href='../app/views/login.html';">login </button>
    <button input type="button" id="volver" onclick="alert('Por favor, cierra el navegador manualmente.')" value="volver atrás"> Cerrar ventana</button>
</body>

</html>
