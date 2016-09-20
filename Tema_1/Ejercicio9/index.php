<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9 PHP</title>
    </head>
    <body>
        
        <h1>TEMA 1</h1>
        
        <p><b>Ejericio 9: </b>Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
        almacenada en una variable</p>
        
        <br><br>

        
        <?php
        $peseta = 500;
        $euro = round($peseta / 166.386,$precision=2);
        
        echo $peseta . " pesetas es equivalente : " . $euro . " euros";
        ?>
        
    </body>
</html>
