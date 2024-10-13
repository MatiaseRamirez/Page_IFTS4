<?php
    // Conexion del Servidor
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'ifts04');

    // define('DB_SERVER', 'localhost:8081');
    // define('DB_USERNAME', 'root');
    // define('DB_PASSWORD', '');
    // define('DB_NAME', 'ifts04');



    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($conn === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }
    $conn->set_charset("utf8mb4");
?>