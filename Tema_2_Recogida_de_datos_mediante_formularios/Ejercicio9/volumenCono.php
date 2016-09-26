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
        
        <h1>TEMA 2</h1>
        
        <b>Ejericio 9: </b>
        
        <h3>RESULTADO:</h3><br>
        
        <?php
        $v = (pi() * $_GET['r'] * $_GET['r'] * $_GET['h'])/3;
        
        echo "El VOLUMEN del Cono es: " . round($v, $precision = 2) . "cm";
        ?>
    </body>
</html>
