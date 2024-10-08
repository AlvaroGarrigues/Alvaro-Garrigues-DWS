<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 (sintaxis)</title>
</head>
<body>
    <h1>Ejercicio area circulo</h1>
    <?php
        define('PI',3.1416);

        $radio = 3.5;

        $area_circulo = PI * ($radio * $radio);

        echo "El radio del circulo es $radio, y su area final es $area_circulo"
    ?>
</body>
</html>