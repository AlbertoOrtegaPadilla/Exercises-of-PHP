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
        
        <b>Ejercicio 28: </b><p>Escribe un programa que calcule el factorial de un número entero leído por teclado.</p><br>
        
        <h3>RESULTADO:</h3><br>  
           
        <?php
            $n = $_POST['n'];
        
            if (!isset($n)){
          ?>
                <h2>Factorial</h2>
                <form action="index.php" method="post">
                  <input type="number" name="n" min="0" autofocus="" required=""><br>
                  <input type="submit" value="Aceptar">
                </form>
          <?php
            } else {
                    $factorial = $n;
                    if ($n == 0) {
                      echo "El factorial del 0 es 1.";
                    } else {
                      for ($i = 1; $i < $n; $i++) {
                        $factorial *= $i;
                      }
                      echo "El factorial del $n es $factorial.";
                    }
                }
        ?>
    </body>
</html>
