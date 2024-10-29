<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "noticias_ifts";
$port = 3306;

$conexion = new mysqli($host, $user, $pass, $db, $port);

if ($conexion -> connect_errno ) {
    echo "fallo al conectar a MySql" . $conexion->connect_error;
}


?>