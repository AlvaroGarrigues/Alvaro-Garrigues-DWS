<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 (funciones)</title>
</head>
<body>
    <h1>Ejercicio contador</h1>
    <?php

        $n1 = 10;
        $n2 = 20;

        function contar1($x, $y) {
            while ($x >= $y) {
                echo $x;
                if ($x > $y) 
                echo ",";
                $x--;
            }
        }

        contar($n2, $n1);

    ?>
</body>
</html>