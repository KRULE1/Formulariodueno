<!DOCTYPE html>
<html>
<head>
    <title>
    PROCESOS DUEÑO
    </title>
    <meta charset="utf8">
</head>
<body>
<h1>RESPUESTAS DEL USUARIO</h1>
<?php
    
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $nacimiento=$_POST['nacimiento'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    
    echo "El nombre del dueño es: $nombre <br/>";
    echo "El apellido paterno del nuevo dueño es: $apellidoPaterno <br/>";
    echo "El apellido materno del dueño es: $apellidoMaterno <br/>";
    echo "La fecha de nacimiento del nuevo dueño es: $nacimiento <br/>";
    echo "El numero telefonico del nuevo dueño es: $telefono <br/>";
    echo "El correo del nuevo dueño es: $correo <br/>";
    echo "La contraseña del nuevo dueño es: $contrasena <br/>";
    ?>

<p>Los datos son correctos: <a href="‪C:\wamp\www\kerule\envi.html">Enviar</a>
	<p>Los datos no son correctos: <a href="‪C:\wamp\www\kerule\formd.html">Volver a escribirlos</a>
    <p>Regresar a menu principal: <a href="">Volver a menu principal</a>
</body>
    </html>