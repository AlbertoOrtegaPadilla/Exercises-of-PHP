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
        
        <b>Ejercicio 13: </b><p>Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos
        entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
        repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
        cumplan los siguientes requisitos:</p>
        
        <ul>
            <li>Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.</li>
            <li>El mínimo debe aparecer en color azul.</li>
            <li>El resto de números debe aparecer en color negro.</li>
        </ul>
        
        <h3>RESULTADO:</h3><br>  
     
        <?php
            // Generamos un array dimensional con números aleatorios que no se repiten
            $i = 0;
            $lineal = [];
            do {
              $n = rand(100, 999);
              if (!in_array($n, $lineal)) {
                $lineal[] = $n;
                $i++;
              }
            } while ($i < 54);
            // volcamos en un array de 9x6 y se calcular las cordenadas del minimo
            $minimo = 999;
            $i = 0;
            for ($x = 0; $x < 9; $x++) {
              for ($y = 0; $y < 6; $y++) {
                $numero[$x][$y] = $lineal[$i];
                $i++;              
                if ($numero[$x][$y] < $minimo) {
                  $minimo = $numero[$x][$y];
                  //posiciono los valores x e y para despues pintar las diagonales en verde
                  $minX = $x;
                  $minY = $y;
                }
              }
            }
            // Se muestra el array con el mínimo en azul y sus diagonales en verde
            echo "<center><table>";
            for ($x = 0; $x < 9; $x++) {
              echo "<tr>";
              for ($y = 0; $y <= 5; $y++) {
                //se pinta en azul el minimo
                if ($numero[$x][$y] == $minimo) {
                  echo '<td><span style="color: blue; font-weight:bold">'.$numero[$x][$y].' </span></td>';
                //se pintan en verde las diagonales.
                } else if (abs((abs($x) - abs($minX))) == abs((abs($y) - abs($minY)))) {
                  echo '<td><span style="color: green; font-weight:bold">'.$numero[$x][$y].' </span></td>';
                //se muestran restos de numeros del array sin modificacion de color.
                } else {
                  echo '<td>'.$numero[$x][$y].'</td>';
                }
              }
              echo "</tr>";  
            }
            echo "</table></center>";
        ?>
    </body>
</html>
