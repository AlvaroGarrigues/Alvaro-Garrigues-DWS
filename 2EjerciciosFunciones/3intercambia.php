<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 intercambiar (funciones)</title>
</head>
<body>
    <h1>Ejercicio intercambiar</h1>

    <?php

    function intercambiar(&$x, &$y) {

        echo("Al principio la variable x tiene por valor $x <br>");
        echo("Al principio la variable y tiene por valor $y <br>");

        $cambio = $x;
        $x = $y;
        $y = $cambio;

        echo("Al final la variable x tiene por valor $x <br>");
        echo("Al final la variable y tiene por valor $y <br>");

    }

    $n1 = 0;
    $n2 = 8;

    intercambiar($n1, $n2);

    ?>
</body>
</html>