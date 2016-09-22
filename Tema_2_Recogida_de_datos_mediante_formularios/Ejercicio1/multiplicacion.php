<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 PHP parte 2</title>
    </head>
    <body>
        <h1>TEMA 2</h1>
        
        <p><b>Ejericio 1: </b>muestre el resultado de su multiplicación.</p>
        
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo "La multiplicación de $a * $b es: ", $a * $b;
        ?>
    </body>
</html>
