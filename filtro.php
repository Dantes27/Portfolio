<?php
// Iniciar sesión
session_start();

// Obtener los parámetros enviados
$data = $_POST["data"];


// Modificar la variable de sesión
$_SESSION["filtro"] = $data;

// Imprimir la variable de sesión modificada
echo $_SESSION["filtro"];