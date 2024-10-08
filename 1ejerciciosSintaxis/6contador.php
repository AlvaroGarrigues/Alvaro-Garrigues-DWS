<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 (sintaxis)</title>
</head>
<body>
    <h1>Ejercicio contador</h1>
    <?php
    
    for ($i = 1; $i <= 100; $i++) {
        if ($i == 100) {
            echo "$i \n";
            break;
        }
        echo "$i,";
    }
    
    $n = 10;

    while ($n >= 0) {
        if ($n == 0) {
            echo $n;
            break;
        }
        echo "$n-";
        $n--;
    }

    ?>
</body>
</html>