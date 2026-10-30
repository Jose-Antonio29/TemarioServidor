<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de artículos</title>
</head>
<body>
    <a href="menu.php">Volver al menú</a>
    <h1>Eliminar producto versión 2</h1>
    
    <?php
    include("conexion.php");
    //Lógica del fichero
    $consulta="Select * from productos";

    $result=mysqli_query($conn,$consulta);
   
    ?>
    <form action="bajas.php" method="get">
        <select name="codEliminar">
            <?php
            while ($row=mysqli_fetch_array($result)){
                $cod=$row['codigo'];
                echo "<option value='$cod'>$cod</option>";
            }
            ?>
        </select>
        <input type="submit" value="Elimina">
    </form>

    

    <?php
    //Cerramos la conexión
    mysqli_close($conn);
    ?>
</body>
</html>