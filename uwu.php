<html>
<head> 
    <title>Verificacion de datos</title>
    <meta charset="UTF-8">
    </head>
    
    <body>
    <h1>Respuestas del cuestionario</h1>
        <p>Inscripcion del cuestionario:</p>
        <?php
        $nombre = $_POST['nombre'];
        $apat = $_POST['apat'];
        $amat = $_POST['amat'];
        $fecnac = $_POST['fecnac'];
        $numtel = $_POST['numtel'];
        $sexo = $_POST['sexo']; 
        $gmail = $_POST['gmail']; 
        $contraseña= $_POST['contraseña'];
        
        
         echo "Nombre: $nombre <br/>";
         echo "Apellido Paterno: $apat <br/>";
         echo "Apellido Materno: $amat <br/>";
         echo "Fecha de nacimiento: $fecnac <br/>";
         echo "Numero telefono: $numtel <br/>";
         echo "Sexo: $sexo <br/>";
         echo "Correo electronico: $gmail <br/>";
         echo "Contraseña: $contraseña <br/>";
         
      
 
        <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
	<p>Los datos son correctos: <a href="file:///C:/wamp/www/kerule/env.html">Enviar</a>
	<p>Los datos no son correctos: <a href="file:///C:/wamp/www/kerule/fd.html">Volver a escribirlos</a>
        
        
    </body>
</html>