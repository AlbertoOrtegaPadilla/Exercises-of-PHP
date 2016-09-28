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
            $n = $_GET['n'];
            
            if (($n % 2) == 0) {
                
                echo "El numero introducido es par.";
            }  else {
                
                echo "El numero introducido es impar.";
                }
            
            if (($n % 5) == 0) {
               
              echo " Y ademas divisible entre 5.";
            } else {
               
                echo " y no es divisible entre 5.";
                }

        ?>
    </body>
</html>
