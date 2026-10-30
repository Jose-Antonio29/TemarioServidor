<?php
//Establecimiento de la conexión al servidor localhost, 
//con el usuario root y sin clave
$conn = mysqli_connect('localHost','root','');

//Seleccionamos la base de datos empresa
mysqli_select_db($conn,'instituto');

mysqli_query ($conn, "SET NAMES 'utf8'");

//Imprimimos si hay algún error
echo mysqli_error($conn);
?>
