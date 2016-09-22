<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8 PHP</title>
    </head>
    <body>
        
        <h1>TEMA 1</h1>
        
        <p><b>Ejericio 8: </b>Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
        almacenada en una variable.</p>
        
        <br><br>
        
        <?php
        $euro = 5;
        $peseta = $euro * 166.386;
        
        echo $euro . " euro es equivalente : " . $peseta . " pesetas";
        ?>
    </body>
</html>
