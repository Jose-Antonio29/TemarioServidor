<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>

<body>
<?php
    include("conexion.php");
    $cod=$_GET['codigoBaja'];
    //creamos la consulta para poder borrar ese producto
    $consulta="DELETE FROM productos WHERE codigo='$cod'";
    //ejecutamos la consulta
    mysqli_query($conn,$consulta);
    //vemos si hay algun error
    echo mysqli_error($conn);
    mysqli_close($conn);
    header("LOCATION:formulario_bajas.php");
?>
</body>

</html>