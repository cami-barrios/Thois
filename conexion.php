<?php 
$mysql = new mysqli("localhost","root","","thois");

if ($mysql->connect_error) {
	die("error de conexion");
}
?>