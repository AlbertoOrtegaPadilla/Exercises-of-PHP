<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 7 de PHP</title>
    </head>
    <body>
        <h1>TEMA 2</h1>
        
        <b>Ejericio 7: RESULTADO:</b>
        <?php
        $baseImponible = round($_GET['b'], $precision = 2); ;
        
        echo "Base imponible &nbsp;&nbsp;&nbsp;&nbsp;" . $baseImponible . "<br>";
        echo "IVA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
        . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $baseImponible * 0.21 . "<br>";
        echo "-----------------------------\n <br>";
        echo "Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
        . "&nbsp;&nbsp;&nbsp;&nbsp;" . $baseImponible * 1.21 . "<br>";
        ?>
    </body>
</html>
