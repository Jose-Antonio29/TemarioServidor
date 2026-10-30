<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de productos</title>
</head>
<body>


    <?php
        include("conexion.php");

        // Lógica del fichero
        $consulta = "SELECT codigo FROM productos";

        $result = mysqli_query($conn, $consulta);
    ?>

    <h1>Modificación de un producto</h1>
    <form action="bajas.php" method="GET">
        <select name="codEliminar">
            <?php
               foreach ($result as $i => $codigo) {
                    foreach ($codigo as $value) {
                        echo("<option value='$value'>$value</option>");
                    }
               }
            ?>
        </select>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>