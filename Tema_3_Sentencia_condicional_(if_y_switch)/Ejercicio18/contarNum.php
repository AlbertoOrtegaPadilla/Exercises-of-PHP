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
          $contador = 0;
          
          //Aun no se llego a esto, pero es mas limpio que repetir la misma estructura que primeraCifra
          do{
                $n = floor($n / 10);
                $contador = $contador + 1;

            } while ($n > 0);
           
           echo "El numero de digitos enteros que introdujo fueron : $contador"
        ?>
    </body>
</html>
