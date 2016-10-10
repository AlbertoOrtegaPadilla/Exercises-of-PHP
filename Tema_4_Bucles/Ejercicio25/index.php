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
        
        <b>Ejercicio 25: </b><p>Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
        $n = $_POST['n'];        
        if (!isset($n)){
        ?>
        <form action="index.php" method="post">
          <input type="number" name="n" min="0" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
        </form>
        <?php
        } else {
          $volteado = 0;
          $numero = $n;
          while ($numero > 0) {
            $volteado = ($volteado * 10) + ($numero % 10);
            echo "$volteado ";
            $numero = floor($numero / 10);
          }
          echo "Si le damos la vuelta al $n tenemos el $volteado";
        }
        ?>
    </body>
</html>
