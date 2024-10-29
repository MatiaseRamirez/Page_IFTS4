<?php
    try{
        $user=htmlentities(addslashes($_POST["usu"]));
        $contrasenia=htmlentities(addslashes($_POST["contra"]));

        $contador=0;

        $base=new PDO("mysql:host=localhost:8081; dbname=ifts04", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql= "SELECT * FROM usuarios WHERE email = :usu";

        $resultado=$base->prepare($sql);
        $resultado->execute(array(":usu"=>$user));

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                // var_dump($registro['contrasenia']);
                if(password_verify($contrasenia, $registro['password'] )){
                    $contador++;
                }
            }
            if($contador>0){
                header('Location:../admin/index.php');
            }else{
                echo "registrate";
            }
        $resultado->closeCursor();
    }catch(Exception $e){
        die("error: ". $e->getMessage());
    }

?>