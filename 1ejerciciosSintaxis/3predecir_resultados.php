<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 (sintaxis)</title>
</head>
<body>
    <h1>Ejercicio predecir resultados</h1>
    <?php
        $num1 = 3;
        $num2 = 5;
        $num3 = 8;
        //esta operacion dara 12, es como 3*4.
        $num1 *= 4;
        echo $num1;
    
        //devuelve false
        echo $num1 <= $num2;

        //devuelve false
        echo $num3 > $num1 and $num3 > $num2;

        //devuelve true
        echo $num3 > $num1 or $num3 > $num2;

        //devuelve false
        echo $num1 > $num2 xor $num1 > $num3;
        
        //esta operacion da 7
        $num3--;
        echo $num3;

        //la respuesta es 19
        $num3 += $num1;
        echo $num3;
    ?>
</body>
</html>