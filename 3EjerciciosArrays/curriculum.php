<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 arrays</title>
</head>
<body>
    <h1>Ejercicio curriculum</h1>
    <?php

    $estudios = "Hola, me llamo Álvaro, y mis estudios son bachillerato y DAW. <br>";
    $idiomas = "Hablo perfectamente Castellano, Valenciano e inglés. <br>";
    $total_es = $estudios . $idiomas;

    $studies = "Hello, my name is Álvaro, and my studies are Development of applications web, and bachiller.";
    $languagues = "I do speak very well Spanish, Valencian and English.";
    $total_en = $studies . $languagues;

    $idioma = "en";

    $total = "total_" . $idioma;
    echo $$total;  

    ?>
</body>
</html>