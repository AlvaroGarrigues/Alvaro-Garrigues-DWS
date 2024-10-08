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
    
    $fichero = "datos.txt";
    $fichero2 = "copia_datos.txt";

    if (file_exists($fichero)) {

        $arrayDatos = file($fichero);

        $arrayDatos[3] = "alv@gmail.com";

        $contenido .= $arrayDatos[0];
        $contenido .= $arrayDatos[1];
        $contenido .= $arrayDatos[2];
        $contenido .= $arrayDatos[3];

        file_put_contents($fichero2, $contenido);

        readfile($fichero2);

    } else {
        echo "primer fichero no encontrado";
    }
    
    
    
    
    
    
    
    
    //copia_datos no tiene que tener el mismo email que el original
    ?>
</body>
</html>