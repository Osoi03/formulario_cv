<?php 

include "conexion.php";

$con=conectDB();
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ciudad = $_POST['ciudad'];
$cpostal = $_POST['cpostal'];
$telefono = $_POST['telefono'];

$cpostal = $_POST['cpostal'];
$insertar = "INSERT INTO cv(email,sexo ,nombre ,apellido ,ciudad ,cpostal, telefono)VALUE(
    '$email',
    '$sexo',
    '$nombre',
    '$apellido',
    '$ciudad',
    $cpostal,
    $telefono)";

    $query = mysqli_query($con,$insertar);

    if ($query) 
    {
        header('location: realizado.html');
    }
?>
