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
        
        <h1>TEMA 3</h1>
        
        <b>RESULTADO: </b><br><br>
        
        <?php
        
            $a = $_GET['nota1'];
            $b = $_GET['nota2'];
            $c = $_GET['nota3'];
            $media = ($a + $b + $c)/3;
            
            echo "Nota media de las tres notas = " . round($media, $precision = 2);
        ?>
    </body>
</html>
