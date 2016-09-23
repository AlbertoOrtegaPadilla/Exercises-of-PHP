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
        
        <b>Ejericio 5: </b>
        
        <h3>RESULTADO:</h3>
        
        <?php
            $b = $_GET['b'];
            $h = $_GET['h'];
            $area = round($b * $h,$precision=2);
            echo "El Area de este rectangulo es : $area";
        ?>
    </body>
</html>
