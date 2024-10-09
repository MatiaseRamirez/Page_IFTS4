<?php
// Archivo para Cerrar Sesion
session_start();
$_SESSION = [];
header('Location: /ifts04');
?>