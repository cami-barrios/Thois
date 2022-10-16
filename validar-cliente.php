<?php 

if(isset($_POST['submit'])){
    $cedula = $_POST['cedulacliente'];
    $nombrecliente = $_POST['nombrecliente'];
    $apellidocliente = $_POST['apellidocliente'];

    if(isset($_POST['correocliente'])){
        $correocliente = $_POST['correocliente'];
    }

    $errores = array();

    if(empty($cedula)){
        $errores[] =  "<p class='error'>*La cedula esta vacia</p>";
    }

    if (empty($nombrecliente)) {
        $errores[] = "<p class='error'>*El nombre esta vacio</p>";
    }else if(is_numeric($nombrecliente)){
        $errores[] = "<p class='error'>*En el nombre debe ser texto</p>";
    }

    if(empty($apellidocliente)){
        $errores[] = "<p class='error'>*El apellido esta vacio</p>";
    }else if(is_numeric($apellidocliente)){
        $errores[] = "<p class='error'>*El apellido debe ser texto</p>";
    }

    if(!empty($correocliente)){
        if(!filter_var($correocliente, FILTER_VALIDATE_EMAIL)){
            $errores[] = "<p class='error'>*La direccion de correo es invalida</p>";
        }
    }

    for($i = 0;$i < count($errores); $i++){
        echo $errores[$i];
        echo "<br>";
    }

    if(!empty($cedula) and !empty($nombrecliente) and !empty($apellidocliente) && count($errores)==0){
        include("insertar-cliente.php");
    }

}

?>