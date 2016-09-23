<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4 PHP</title>
    </head>
    <body>
        
        <h1>TEMA 2</h1>
        
        <b>Ejericio 4: </b>
        
        <h3>RESULTADO:</h3>
        
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            
            echo "X : ". $a . "<br>";
            echo "Y : ". $b . "<br>";
            echo "Suma : " . ($a + $b). "<br>";
            echo "Resta : " . ($a - $b). "<br>";
            echo "División : " . $a / $b. "<br>";
            echo "Multiplicación : " . $a * $b. "<br>";

        ?>
    </body>
</html>
