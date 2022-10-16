<?php 

if(isset($_POST['submit'])){
    $ref = $_POST['ref'];
    $nombreprod = $_POST['nombreprod'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $proveedor = $_POST['proveedor'];

    if(isset($_POST['descprod'])){
        $descripcion = $_POST['descprod'];
    }

    $errores = array();

    if(empty($ref)){
        $errores[] =  "<p class='error'>*Referencia esta vacio</p>";
    }

    if (empty($nombreprod)) {
        $errores[] = "<p class='error'>*El nombre esta vacio</p>";
    }else if(is_numeric($nombreprod)){
        $errores[] = "<p class='error'>*En el nombre debe ser texto</p>";
    }

    if($proveedor == "0"){
        $errores[] = "<p class='error'>*Seleccione un proveedor</p>";
    }

    if(empty($cantidad)){
        $errores[] = "<p class='error'>*La cantidad esta vacia</p>";
    }else if(!is_numeric($cantidad)){
        $errores[] = "<p class='error'>*La cantidad debe ser numerica</p>";
    }

    if(empty($precio)){
        $errores[] = "<p class='error'>*El precio esta vacio</p>";
    }else if(!is_numeric($precio)){
        $errores[] = "<p class='error'>*El precio debe ser numerico</p>";
    }

    for($i = 0;$i < count($errores); $i++){
        echo $errores[$i];
        echo "<br>";
    }

    if(!empty($ref) and !empty($nombreprod) and !empty($cantidad) and !empty($precio) && count($errores)==0){
        include("insertar-producto.php");
    }

}

?>