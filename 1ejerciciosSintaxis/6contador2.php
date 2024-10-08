<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 ampliacion (sintaxis)</title>
</head>
<body>
    <h1>Ejercicio ampliacion contador</h1>
    <?php
    
    print("Este contador va del cero al cien:");
    //el contador va de 1 a 100 para empezar imprimiendo el primero
    //incluye el 100 para poder printear este mismo
    for ($i = 1; $i <= 100; $i++) {
        //este ultimo if se detiene al imprimir el 100, luego sale de la iteracion para no repetirlo
        if ($i == 100) {
            echo "$i \n";
            break;
        }
        echo "$i,";
    }
    
    $n = 10;

    print("Este contador va del diez al cero:");
    //este bucle incluye el cero para imprimirlo
    while ($n >= 0) {
        //al detectar el cero sale de la iteracion
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