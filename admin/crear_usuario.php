<?php   
// Archivo para crar usuario en la DB con Contraseña con Hash
// Importar la conexion
require 'conexion.conexionDb.php';
$db = conectarDB(); 

// Crear un email y password
$email = "test@test.com";
$password = "12345";

$passwordHash = password_hash($password, PASSWORD_DEFAULT); 

// Query para crear el usuario
$query = " INSERT INTO usuarios (email, password) VALUES ( '${email}', '${passwordHash}' ); ";

echo $query; 

// Agregarlo a la base de datos
mysqli_query($db, $query);

