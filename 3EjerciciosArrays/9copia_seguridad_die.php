<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9 (funciones)</title>
</head>
<body>
    <h1>Ejercicio copia seguridad</h1>
    <?php
    
    $fichero = "aa.txt";
    $fichero2 = "copia_datos.txt";

    file_exists($fichero) or die ("no se encuentra el fichero");


    $arrayDatos = file($fichero);
    $arrayDatos[3] = "alv@gmail.com";

    $contenido .= $arrayDatos[0];
    $contenido .= $arrayDatos[1];
    $contenido .= $arrayDatos[2];
    $contenido .= $arrayDatos[3];

    file_put_contents($fichero2, $contenido);

    readfile($fichero2);

    ?>
</body>
</html>