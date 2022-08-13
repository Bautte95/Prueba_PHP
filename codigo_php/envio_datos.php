<?php

include("conex_db.php");

// Insertar datos en la base de datos

$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);

if(strlen($nombre) >= 1 && strlen($apellido)){

    $insertar_datos = "INSERT INTO datos (nombre, apellido) VALUES ('$nombre','$apellido')";
    echo mysqli_query($conex,$insertar_datos);
}

?>