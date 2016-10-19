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
        
        <h1>TEMA 5</h1>
        
        <b>Ejercicio 2: </b><p>Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
        junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.</p><br>
        
        <h3>RESULTADO:</h3><br>  
           
        <?php
        $n = $_GET['n'];
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];

        if (!isset($n)) {
          $contadorNumeros = 0;
          $numeroTexto = "";
        }

        if ($contadorNumeros == 10) {
          $numeroTexto = $numeroTexto . " " . $n; // añade el ultimo numero leido
          $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
          $numero = explode(" ", $numeroTexto); // función explode() para convertir la cadena de caracteres en un array.

          $maximo = -PHP_INT_MAX;
          $minimo = PHP_INT_MAX;

          foreach ($numero as $n) {
            if ($n < $minimo) {
              $minimo = $n;
            }
            if ($n > $maximo) {
              $maximo = $n;
            }
          }
          foreach ($numero as $n) {
            if ($n == $minimo) {
              echo "$n minimo<br>";
            } else if ($n == $maximo) {
              echo "$n maximo<br>";
            } else {
              echo "$n<br>";
            }
          }
        }
        if (($contadorNumeros < 10) || (!isset($n))) {
    ?>
            <form action="index.php" method="get">
              <input type="number" name ="n" autofocus>
              <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
              <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
              <input type="submit" value="OK">
            </form>
    <?php
        }
    ?>
    </body>
</html>
