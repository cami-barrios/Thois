<?php

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$conex = mysqli_connect("localhost","root","","thois");

$consult = "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'";

$resultado = mysqli_query($conex,$consult);

if($resultado==true){
    header("location: index.php");
}

?>