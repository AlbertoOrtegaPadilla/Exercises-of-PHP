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
        
        <b>Ejericio 5: </b><p>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while.</p><br>
        
        <h3>RESULTADO:</h3><br>
        
        <?php
            $i = 340;
            
            while($i != 160){
                $x = $i - 20;
                $i = $x;
                echo $i . "<br>";
            }
        ?>
    </body>
</html>
