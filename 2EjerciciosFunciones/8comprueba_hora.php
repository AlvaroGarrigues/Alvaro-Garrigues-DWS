<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 (funciones)</title>
</head>
<body>
    <h1>Ejercicio comprueba hora</h1>
    <?php

    $hora = "24:60:12";

    if (preg_match("/^([0-1][0-9]|[2][0-4]):([0-5][0-9]|[6][0]):([0-5][0-9]|[6][0])$/", $hora, $partes) == 1) {

        echo "La hora completa es " . $partes[0] . "<br>";
        echo "La hora es " . $partes[1] . "<br>";
        echo "El minuto es " . $partes[2] . "<br>";
        echo "El segundo es " . $partes[3] . "<br>";

    } else {
    echo "Formato de fecha no válido";
    }


    ?>
</body>
</html>