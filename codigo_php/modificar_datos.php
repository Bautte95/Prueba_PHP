<?php

include("conex_db.php");

// modificacion de datos

$id = trim($_POST['id']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);

if(strlen($id) >= 1 && strlen($nombre) >= 1 && strlen($apellido)){

    $modificar_datos = "UPDATE datos SET nombre='$nombre', apellido='$apellido' WHERE id='$id' ";
    echo mysqli_query($conex,$modificar_datos);
}

?>