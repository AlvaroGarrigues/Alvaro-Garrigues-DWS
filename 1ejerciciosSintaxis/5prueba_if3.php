<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercucio 5 ampliacion (sintaxis)</title>
</head>
<body>
    <h1>Ejercicio ampliacion prueba if...ifelse</h1>
    <?php

    $nota1 = rand(0, 10);
    $nota2 = rand(0, 10);
    $nota3 = rand(0, 10);
    $maxNota;

    if ($nota1 > $nota2 && $nota1 > $nota3) {
        echo "la nota 1 es mayor, que es $nota1: \n";
        $maxNota = $nota1;
    } else {
        if ($nota3 > $nota2) {
            echo "la nota 3 es la mayor $nota3: \n";
            $maxNota = $nota3;
        } else {
            echo "la nota 2 es la mayor $nota2: \n";
            $maxNota = $nota2;
        }
    }

    switch ($maxNota) {
        case 5: echo "SUFICIENTE";
        break;
        case 6: echo "bien";
        break;
        case 7: echo "notable";
        break;
        case 8: echo "notable alto";
        break;
        case 9: echo "sobresaliente";
        break;
        case 10: echo "excelente";
        break;
        default: echo "insuficiente";
        break;
    }

    ?>
</body>
</html>