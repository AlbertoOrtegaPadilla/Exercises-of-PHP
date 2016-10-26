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
        <style type="text/css">
            body{
                background-color: brown;
            }
            table, th, td {
              border: 0px;
              text-align: center;
            }
            td.negro {
              background-color: black;
            }
            td.blanco {
              background-color: white;
            }
            tr.red {
              background-color: red;
            }
        </style>
    </head>
    <body>
        
        <h1>TEMA 5</h1>
        
        <b>Ejercicio 14: </b><p>Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
        saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
        color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
        El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
        se indican del 1 al 8.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <center><form action="index.php" method="get">
              <input type="text" name="posicion" autofocus="" required="">
              <input type="submit" value="Aceptar">
        </form></center><br> 
        
        <?php
            // Recoge la posición del alfil
            $posicion = $_GET['posicion'];
            $x = ord(substr($posicion, 0, 1)) - ord('a');
            $y = 8 - substr($posicion, 1, 1);
            //echo"<br>~$x + $y.<br>";
            // Pinta el tablero de ajedrez
            $color = "blanco"; // color de la primera casilla
            echo '<center><table><tr class="red">';
            echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr>';
            for ($fila = 0; $fila < 8; $fila++) {
                echo '<tr><td style="text-align: right; background-color: red;">'.(8 - $fila).'</td>';
                for ($columna = 0; $columna < 8; $columna++) {
                    echo "<td class=\"$color\">";

                    // Comprueba si el alfil está en la posición actual
                    if (($x == $columna) && ($y == $fila)) {
                      echo '<img src="img/alfil.png">';
                    // Comprueba si es una posición a la que puede llegar el alfil
                    } else if (abs((abs($x) - abs($columna))) == abs((abs($y) - abs($fila)))) {
                      echo '<img src="img/alfilsemitransparente.png">';
                    } else {
                      echo '<img src="img/vacio.png">';
                    }
                    echo "</td>";
                    // Alterna el color de la casilla
                    if ($color == "blanco") {
                      $color = "negro";
                    } else {
                      $color = "blanco";
                    }
                    echo "</td>";
                }
                if ($color == "blanco") {
                    $color = "negro";
                } else {
                    $color = "blanco";
                }
                echo '<td style="text-align: left; background-color: red;">'.(8 - $fila).'</td></tr>';
            }
        ?>
                <tr class="red">
                  <td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td>
                </tr>
            </table></center>
    </body>
</html>
