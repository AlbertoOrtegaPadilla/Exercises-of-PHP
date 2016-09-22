<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2 PHP parte 2</title>
    </head>
    <body>
        
        <h1>TEMA 2</h1>
        
        <b>Ejericio 2: </b>
        
        <h3>RESULTADO:</h3>
        
        <?php
            $a = $_GET['a'];
            $b = round($a * 166.386,$precision=0);
            echo "El cambio de $a EUROS a PESETAS es igual: $b pesetas";
        ?>
    </body>
</html>
