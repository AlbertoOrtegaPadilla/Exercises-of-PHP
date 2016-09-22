<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5 PHP</title>
    </head>
    <body>
        
        <h1>TEMA 1</h1>
        
        <p><b>Ejercicio 5: </b>Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente.
        A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
        y la multiplicación.</p>
        
        <br><br>
        
        <?php
        $x = 144;
        $y = 999;
        echo "X : ". $x. "<br>";
        echo "Y : ". $y. "<br>";
        echo "Suma : " . ($x + $y). "<br>";
        echo "Resta : " . ($x - $y). "<br>";
        echo "División : " . $x / $y. "<br>";
        echo "Multiplicación : " . $x * $y. "<br>";
        ?>
    </body>
</html>
