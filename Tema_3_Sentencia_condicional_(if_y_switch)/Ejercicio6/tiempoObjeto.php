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
            $h = $_GET['h'];
            $g = 9.81;
            $t = sqrt(2 * $h / $g);
            
            echo " h = " . $h . " m.<br>";
            echo " g = 9.81m/s2.<br>";
            echo "t = " . round($t, $precision = 2) . " segundos.";
        ?>
    </body>
</html>
