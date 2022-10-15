<?php 

if(isset($_POST['submit'])){
    $ref = $_POST['ref'];
    $nombreprod = $_POST['nombreprod'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    if(isset($_POST['descprod'])){
        $descripcion = $_POST['descprod'];
    }

    if(empty($ref)){
        echo "<p class='error'>*Referencia esta vacio</p>";
    }

    if (empty($nombreprod)) {
        echo "<p class='error'>*El nombre esta vacio</p>";
    }else if(is_numeric($nombreprod)){
        echo "<p class='error'>*En el nombre debe ser texto</p>";
    }

    if(empty($cantidad)){
        echo "<p class='error'>*La cantidad esta vacia</p>";
    }else if(!is_numeric($cantidad)){
        echo "<p class='error'>*La cantidad debe ser numerica</p>";
    }

    if(empty($precio)){
        echo "<p class='error'>*El precio esta vacio</p>";
    }else if(!is_numeric($precio)){
        echo "<p class='error'>*El precio debe ser numerico</p>";
    }

    if(!empty($ref) and !empty($nombreprod) and !empty($cantidad) and !empty($precio)){
        include("insert-prod.php");
    }

}

?>
