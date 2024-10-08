<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 ampliacion (sintaxis)</title>
</head>
<body>
    <h1>Ampliacion ejercicio ahora</h1>
    <?php

    
    $antes = time();
    $fechaNacimiento = "2000-04-18";
    $cumple = strtotime($fechaNacimiento);


    $diferencia = $antes - $cumple;


    $anyos = $diferencia/31536000;

    $restoAnyo = $diferencia % 31536000;
    $meses = $restoAnyo  / 2592000;

    $restoMeses = $diferencia % 2592000;
    $dias = $restoMeses / 86400;

    echo "tienes " .number_format($anyos, 0). " años, " .bcdiv($meses, '1', 0). " meses y " .bcdiv($dias, '1', 0). " dias de vida <br>";

    $restoDias = $diferencia % 86400;
    $horas = $restoDias / 3600;

    $restoHoras = $diferencia % 3600;
    $minutos = $restoHoras / 60;

    $segundos = $diferencia % 60;

    echo "y " . bcdiv($horas, '1', 0). " horas, " .bcdiv($minutos, '1', 0). " minutos y " . $segundos . " segundos de vida";

    ?>
</body>
</html>