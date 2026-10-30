<?php
    // Conectamos a la base de datos
    include("conexion.php");

    // Guardamos los datos de cada campo
    $cod = $_POST['codigo'];
    $producto = $_POST['producto'];
    $detalle = $_POST['detalle'];
    $precio = $_POST['precio'];
    $descuento = $_POST['descuento'];

    // Realizamos el UPDATE 
    $consulta = "UPDATE productos SET producto='$producto', detalle='$detalle', precio='$precio', descuento='$descuento' WHERE codigo='$cod'";

    // Mandamos la consulta al servidor
    mysqli_query($conn, $consulta);

    // Comprobamos si ha ocurrido algún error
    echo mysqli_error($conn);

    // Volvemos al listado para ver la información actualizada
    header("LOCATION:listado.php");
?>