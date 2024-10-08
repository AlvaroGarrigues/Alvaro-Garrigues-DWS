<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 (funciones)</title>
</head>
<body>
    <h1>manejo de textos</h1>
    <?php

    define('PI',3.1416);
    $radio = 2;
    $area = PI * ($radio*$radio);
    
    echo  $area;
    echo "<br>";

    $nuevo_numero = number_format($area, 2);
    $textoResultado = "El área calculada del círculo es $nuevo_numero";
    echo $textoResultado;
    echo "<br>";

    $textoResultadoMayus = strtoupper($textoResultado);
    echo($textoResultadoMayus);
    echo "<br>";
    
    $textoResultadoModificado = str_replace("calculada", "obtenida", $textoResultado);
    echo($textoResultadoModificado);
    echo "<br>";

    echo(strlen($textoResultadoModificado));
    echo "<br>";

    echo(strpos($textoResultadoModificado, "círculo"));
    echo "<br>";

    $numeros = "1,2,3,4,5";

    $arreglo = explode("," ,$numeros);
    echo(implode("+", $arreglo));
    echo("<br>");

    $total = $arreglo[0]+$arreglo[1]+$arreglo[2]+$arreglo[3]+$arreglo[4];

    echo(implode("+", $arreglo) . "=" . $total);
    ?>    
</body>
</html>