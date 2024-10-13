<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 arrays</title>
</head>
<body>
    <h1>Ejercicio coches</h1>
    <?php

    $tabla = array('001AAA' => array('Ford', 'Focus', 5), '002AAA' => array('Hyundai', 'Coupe', 5), '003AAA' => array('Lamborghini', 'Murcielago', 3));

    foreach ($tabla as $matricula => $datos) {

        echo 'La matricula '.$matricula.' tiene por datos: ';
        
        for ($x = 0; $x < count($datos); $x++) {
            
            if ($x == 2) {
                echo "de ".$datos[$x]." puertas";
            } else {
                echo $datos[$x]." ";
            }
        }
        echo "<br>";
    }






    ?>
</body>
</html>