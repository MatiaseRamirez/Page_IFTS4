<?php
    $usuario = $_POST["usu"];
    $contra=$_POST['contra'];
    

    // $contasenia = $_POST['contra'];

    $opciones=['cost'=>8];

    $pass_cifrado=password_hash($contra, PASSWORD_DEFAULT, array("cost"=>12));
    try{
        $base = new PDO("mysql:host=localhost:8081; dbname=ifts04;", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

        $sql = "INSERT INTO usuarios (id,email, contrasenia, password) VALUES (null, :usu, :pa, :contra)";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":usu"=>$usuario, ":pa"=>$contra, ":contra"=>$pass_cifrado));

        echo "registrado";

        $resultado->closeCursor();
    }catch(Exception $e){

        echo "error:  " . $e->getLine();
    }finally{

        $base=null;

    }





?>