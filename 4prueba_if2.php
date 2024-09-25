<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 (sintaxis)</title>
</head>
<body>
    <h1>Ejercicio prueba if...if else</h1>
    <?php

    $nota1 = 4.4;
    $nota2 = 6.2;
    $nota3 = 8;

    if ($nota1 > $nota2 && $nota1 > $nota3) {
        echo "la nota 1 es mayor, que es $nota1";
       
    } else {
        if ($nota3 > $nota2) {
            echo "la nota 3 es la mayor $nota3";
        } else {
            echo "la nota 2 es la mayor $nota2";
        }
    }

    ?>
</body>
</html>