<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>TEMA 4</h1>
        
        <b>Ejericio 2: </b><p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while.</p><br>
        
        <h3>RESULTADO:</h3><br>
        
        <?php
        $i = 0;
        
            while ($i != 100) {
                $x = $i +5;
                $i = $x;
                echo $i . "<br>";
            }
        ?>
    </body>
</html>
