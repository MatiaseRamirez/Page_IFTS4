<?php
//Archivo para luego validar Roles en el LogIn  
$roles_permitidos = ['Administrador', 'Editor'];
if(!array_key_exists('rol', $_SESSION)|| !in_array($_SESSION['rol'], $roles_permitidos)){
    header('Location: /login.php');///ver donde pegar
}
?>