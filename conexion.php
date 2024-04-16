<?php
function conectDB()
{
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="curriculum";

    $conexion = mysqli_connect($servidor, $usuario, $password, $base)
or die("No se pudo conectar con la base de datos");
return $conexion;
}


?>