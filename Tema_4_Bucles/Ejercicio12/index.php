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
        
        <h1>TEMA 4</h1>
        
        <b>Ejericio 12: </b><p>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer término
        de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo
        que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144… El número n se debe
        introducir por teclado.</p><br>
        
        <h3>RESULTADO:</h3><br>
        
        <form action="index.php" method="get">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar"><br><br>
            <?php
                if (empty($_GET['n'])) { $n="";} else { $n=$_GET['n'];}
                if ($n > 0) {

                    $i = 1;
                    $f1 = 0;
                    $f2 = 1;
                    switch ($n) {
                      case 1:
                        echo "0";
                        break;
                      case 2:
                        echo "0 1";
                        break;
                      default:
                        echo "0 1";
                        while($n > 2) {
                          $aux = $f1;
                          $f1 = $f2;
                          $f2 = $aux + $f2;
                          echo " $f2";
                          $n--;
                        }
                    }
                } 
            ?>
        </form>
    </body>
</html>
