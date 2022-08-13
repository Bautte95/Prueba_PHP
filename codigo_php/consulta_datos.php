<?php

include("conex_db.php");

// Consultar de datos

$resultado = mysqli_query($conex,"SELECT * FROM datos");
while($consulta = mysqli_fetch_array($resultado)){

    echo '
    <ul>
        <li>Id: '.$consulta['id'].'</li>
        <li>Nombre: '.$consulta['nombre'].'</li>
        <li>Apellido: '.$consulta['apellido'].'</li>
    </ul>
    ';
}
?>