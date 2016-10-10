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
        
        <b>Ejercicio 24: </b><p>Escribe un programa que lea un número N e imprima una pirámide de números con N filas como
        en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier
        para que los espacios tengan la misma anchura que los números. 1.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
          $alturaIntroducida = $_POST['alturaIntroducida'];       
          if (!isset($alturaIntroducida)){
          ?>
            <h2>Piramide de numeros</h2>
            <form action="index.php" method="post">
              Altura: <input type="number" name="alturaIntroducida" min="1" max="9" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $altura = 1;
            $i = 0;
            $espacios = $alturaIntroducida-1;
            echo "<p style=\"font-family: courier\">";
            while ($altura <= $alturaIntroducida) {
              // inserta espacios
              for ($i = 1; $i <= $espacios; $i++) {
                echo "&nbsp";
              }              
              // pinta la linea de numeros
              for ($i = 1; $i < $altura; $i++) {
                echo $i;
              }              
              for ($i = $altura; $i > 0; $i--) {
                echo $i;
              }
              echo "<br>";
              $altura++;
              $espacios--;
            } // while
            echo "</p>";
          }
        ?>
    </body>
</html>
