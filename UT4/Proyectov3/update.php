<html>
<head></head>
<body>

<?php
    include("conexion.php");
	$codUpdate=$_GET['codUpdate'];
    //Lógica del fichero
    $consulta="Select * from productos where codigo='$codUpdate'";

    $result=mysqli_query($conn,$consulta);
	$row=mysqli_fetch_array($result);

	$cod=$row['codigo'];
	$producto=$row['producto'];
	$precio=$row['precio'];
	$detalle=$row['detalle'];
	$descuento=$row['descuento'];

?>


<form action="updateFinal.php" method="post">
	<table width="400" border="0">
	<tr>
		<td colspan="4">MODIFICACIÓN DE PRODUCTOS </td>
	</tr>
	<tr>
		<td>Codigo</td> <td><input type="text" name="codigo" value="<?php echo $cod; ?>" required readonly/></td>
		<td>Producto</td> <td><input type="text" name="producto" value="<?php echo $producto; ?>" required /></td>
	</tr>
	<tr>
		<td>Detalle</td> <td><input type="text" name="detalle" value="<?php echo $detalle; ?>" required /></td>
	</tr>	
	<tr>
		<td>Precio</td> <td><input type="number" name="precio" value="<?php echo $precio; ?>" step="any" required /></td>
		<td>Descuento</td> <td><input type="number" name="descuento" value="<?php echo $descuento; ?>" step="any" required /></td>
	</tr>	
	<tr>
		<td colspan="2"><input type="submit" name="button" value="Enviar"/></td>
	</tr>
	</table>
	</form>
	<p><a href="menu.php"> Volver al menu</a></p>
</body>
</html>