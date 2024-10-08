<?php

function calculaDescuento($precio, $descuento = 0) {

    if ($descuento == 0) {
        return $precio;
    } else {
        $descuento = $descuento/100;
        $descuento = $precio * $descuento;
        $precio = $precio - $descuento;

        return $precio;
    }
}

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

function contar1($x, $y) {
    while ($x >= $y) {
        echo $x;
        if ($x > $y) 
        echo ",";
        $x--;
    }
}

function saludar($n) {
    echo "hola, $n";
}
        
?>