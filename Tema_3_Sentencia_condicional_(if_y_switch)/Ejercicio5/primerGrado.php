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
        
        <b>RESULTADO: </b><br>
        
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            
            echo " a = " . $a . "<br>";
            echo " b = " . $b;
            
            if ($a > 0 && $b < 0) {
                
                echo "<br>ax + b = 0 => " . $a . "x $b = 0 => x = " . $b . "/$a => x = " . $b/$a;
                
            }else if ($b < 0 && $a < 0) {
                    
                    echo "<br>ax + b = 0 => " . $a . "x $b = 0 => x = " . $b . "/$a => x = " . $b/$a;
                        
                }else {
                        echo "<br>ax + b = 0 => " . $a . "x + $b = 0 => x = " . $b . "/$a => x = " . $b/$a;
                    }
        ?>
    </body>
</html>
