<html>
<head></head>
<body>

    <?php
        include("conexion.php");
        $cod = $_GET['codUpdate'];

        // Lógica del fichero
        $consulta = "SELECT * FROM productos WHERE codigo='$cod'";

        $result = mysqli_query($conn, $consulta);
        $row = mysqli_fetch_array($result);
        $detalle=$row['detalle'];
        $codigo=$row['codigo'];
        $producto=$row['producto'];
        $precio=$row['precio'];
        $descuento=$row['descuento'];
    ?>

    <form action="updateFinal.php" method="post">
        <table width="400" border="0">
            <tr>
                <td colspan="4">MODIFICACIÓN DE PRODUCTOS </td>
            </tr>
            <tr>
                <td>Codigo</td> <td><input type="text" name="codigo" value=<?php print $codigo;?> readonly /></td>
                <td>Producto</td> <td><input type="text" name="producto" value=<?php print $producto;?> required /></td>
            </tr>
            <tr>
                <td>Detalle</td> <td><input type="text" name="detalle" value=<?php print $detalle;?> required /></td>
            </tr>	
            <tr>
                <td>Precio</td> <td><input type="number" name="precio" step="any"  value=<?php print $precio;?> required /></td>
                <td>Descuento</td> <td><input type="number" name="descuento" step="any"  value=<?php print $descuento;?> required /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="button" value="Enviar"/></td>
            </tr>
        </table>
	</form>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>