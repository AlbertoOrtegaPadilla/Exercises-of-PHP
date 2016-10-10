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
        
        <b>Ejericio 13: </b><p>Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y cuántos
        son negativos.</p><br>
        
        <h3>RESULTADO:</h3><br>     
        
        <?php
          $contador = $_GET['contador'];
          $n = $_GET['n'];
          $positivos = $_GET['positivos'];
          $negativos = $_GET['negativos'];

          if (!isset($n)) {
            $contador = 0;
            $positivos = 0;
            $negativos = 0;
          } else {
            $contador++;   
          }
          
          if ($n > 0) {
            $positivos++;
          }

          if ($contador == 0) {
            echo "Introduce 10 numeros:<br>";
          }

          if ($contador < 10) {
        ?>
            <form action="index.php" method="get">
              <input type="number" name="n" autofocus>
              <input type="hidden" name="contador" value="<?php echo $contador; ?>">
              <input type="hidden" name="positivos" value="<?php echo $positivos; ?>">
              <input type="hidden" name="negativos" value="<?php echo $negativos; ?>">
              <input type="submit" value="Aceptar">
            </form>
        <?php
          }

          if ($contador == 10) {
            echo "Se han introducido $positivos numeros positivos.<br>";
            echo "Se han introducido $negativos numeros negativos.";
          }
        ?>

    </body>
</html>
