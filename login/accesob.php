<?php
    session_start();
    // Conectamos a la base de datos
    include('conexion.php');

    // Guardamos el dni y la contraseña introducidas por el usuario
    $dni = $_POST['dni'];
    $pass = $_POST['pass'];

    // Creamos la consulta en la que buscamos si ese usuario y esa contraseña existen en nuestra base de datos
    $consulta = "SELECT * FROM usuarios WHERE dni = '$dni' AND password = '$pass'";
    
    // Enviamos la consulta al servidor
    $result = mysqli_query($conn, $consulta);

    // Comprobamos si ha surgido algún error durante la consulta
    echo(mysqli_error($conn));

    // Si no tiene resultados el usuario no está registrado
    if (mysqli_num_rows($result) == 0) {
        echo "Error";
    }
    // Si solo tiene un resultado el usuario está registrado 
    elseif (mysqli_num_rows($result) == 1) {
        echo "Usuario registrado";
        $datosUsuario = mysqli_fetch_assoc($result);
        
        $_SESSION['dniU'] = $datosUsuario['dni'];
        $_SESSION['nombreU'] = $datosUsuario['nombre'];
        $_SESSION['rolU'] = $datosUsuario['rol'];

        // Si el rol del usuario es 0 redireccionamos al portal de usuarios normales
        if ($_SESSION['rolU'] == 0) {
            header("LOCATION:usuario/index.php");
        } 
        // Si el rol del usuario es 1 redireccionamos al portal de admin
        elseif ($_SESSION['rolU'] == 1) {
            header("LOCATION:admin/index.php");
        }
        // Caso especial
        else {
            header(LCOATION:construccion.php);
        }

    } 
    // Si da más de 1 resultado tenemos un error de integridad en la base de datos
    else {
        echo "Error, fallo de integridad en la BBDD";
    }
?>