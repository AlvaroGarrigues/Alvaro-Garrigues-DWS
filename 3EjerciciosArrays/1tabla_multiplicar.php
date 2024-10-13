<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 arrays</title>
</head>
<body>
    <h1>Ejercicio tabla multiplicar</h1>
    <?php

    $tabla[0][0] = 0;
    $tabla[0][1] = 0;
    $tabla[0][2] = 0;
    $tabla[0][3] = 0;
    $tabla[0][4] = 0;
    $tabla[0][5] = 0;
    $tabla[0][6] = 0;
    $tabla[0][7] = 0;
    $tabla[0][8] = 0;
    $tabla[0][9] = 0;
    $tabla[0][10] = 0;

    $tabla[1][0] = 0;
    $tabla[1][1] = 1;
    $tabla[1][2] = 2;
    $tabla[1][3] = 3;
    $tabla[1][4] = 4;
    $tabla[1][5] = 5;
    $tabla[1][6] = 6;
    $tabla[1][7] = 7;
    $tabla[1][8] = 8;
    $tabla[1][9] = 9;
    $tabla[1][10] = 10;

    $tabla[2][0] = 0;
    $tabla[2][1] = 2;
    $tabla[2][2] = 4;
    $tabla[2][3] = 6;
    $tabla[2][4] = 8;
    $tabla[2][5] = 10;
    $tabla[2][6] = 12;
    $tabla[2][7] = 14;
    $tabla[2][8] = 16;
    $tabla[2][9] = 18;
    $tabla[2][10] = 20;

    for ($x = 0; $x < count($tabla); $x++) {

        echo "tabla del " . $x . " : <br>";

        for ($y = 0; $y < count($tabla[0]); $y++) {

            echo $x . " x " . $y . " = " . $tabla[$x][$y] . "<br>";

        }
        echo "<br>";
    }


    ?>
</body>
</html>