<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 ampliacion (funciones)</title>
</head>
<body>
    <h1>Ejercicio ampliacion contador</h1>
    <?php
        
        $n1 = 10;
        $n2 = 20;
        $n3 = 2;

        function contar($x, $y, $z = 1) {
            if ($x > $y) {

                while ($x >= $y) {
                    echo $x;
                    if ($x > $y) 
                    echo ",";
                    $x = $x - $z;
                }

            } elseif ($x < $y) {

                while ($x <= $y) {
                    echo $x;
                    if ($x < $y) 
                    echo ",";
                    $x = $x + $z;
                }

            }            
        }

        contar($n1, $n2, $n3);

    ?>
</body>
</html>