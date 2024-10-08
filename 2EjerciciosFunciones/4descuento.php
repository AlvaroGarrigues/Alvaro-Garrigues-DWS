<?php
    include "funciones.inc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 (funciones)</title>
</head>
<body>
    <h1>Ejercicio descuento</h1>
    <?php


    $n1 = 250;
    $n2 = 10;
    $n3 = 85;

    $total = calculaDescuento($n1, $n2);
    $total1 = calculaDescuento($n3);

    echo("El total del producto final es: $total <br>");
    echo("El total del producto sin descuento es: $total1");
    ?>    
</body>
</html>