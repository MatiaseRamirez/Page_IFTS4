<?php 

 $hostname = 'localhost';
 $username = 'root';
 $passname = '';
 $dbname = 'ifts04';
 $puerto = 8081;

   $conn = new mysqli($hostname, $dbname, $username, $passname, $puerto);
  

  if (mysqli_connect_errno()){
    printf('CONEXION FALLID ...', mysqli_connect_error());
    exit();
  }echo 'CONEXION DB.';


function conectarDB(){
//   $db = mysqli_connect('localhost', 'root', '','ifts04');

//   if(!$db) {
//       echo "ERROR! No se pudo conectar a la DB";
//       exit;
//   }

//   return $db;
// }
// if ($conn->connect_error){
//   die('ERROR CONECTION...'. $conn->connect_error);
// }

define('DB_SERVER', 'localhost:8081');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ifts04');

// Conexion Local
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'ifts04');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false){
    die("ERROR EN LA CONEXION" . mysqli_connect_error());
}
$conn->set_charset("utf8mb4");
}
?>