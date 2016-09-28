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

        <img src="IMG/grado.gif" alt="Smiley face" width="190" height="90"><br><br>

        <?php
        
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            
            echo " a = " . $a . "<br>";
            echo " b = " . $b . "<br>";
            echo " c = " . $c . "<br>";
            
            if (($a == 0) && ($b == 0) && ($c == 0)) {
              echo  "La ecuación tiene infinitas soluciones.";
            }

            if (($a == 0) && ($b == 0) && ($c != 0)) {
              echo  "La ecuación no tiene solución.";
            }

            if (($a != 0) && ($b != 0) && ($c == 0)) {
              
              echo  "<br>x<sub>1</sub> = 0";
              echo  "<br>x<sub>2</sub> = " . (-$b / $a);
            }

            if (($a == 0) && ($b != 0) && ($c != 0)) {
              
              echo  "x<sub>1</sub> = x<sub>2</sub> = " . (-$c / $b);
            }

            if (($a != 0) && ($b != 0) && ($c != 0)) {  

              $discriminante = ($b * $b) - (4 * $a * $c);

              if ($discriminante < 0) {
                echo  "La ecuación no tiene soluciones reales";
              } else {
                echo  "<br>x<sub>1</sub> = " . round((-$b + sqrt($discriminante)) / (4 * $a * $c), $precision = 2);
                echo  "<br>x<sub>2</sub> = " . round((-$b - sqrt($discriminante)) / (4 * $a * $c), $precision = 2);
              }
            }
        ?>
    </body>
</html>
