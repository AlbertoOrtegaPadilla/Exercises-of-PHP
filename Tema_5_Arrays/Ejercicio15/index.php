<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 15</title>
        <style>
            div {
                float: left;
                text-align: center;
                width: 50%;
            }
            table {
                margin: auto;
                margin-top: 30px;
            }
            table, tr, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            td {
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Tema 5</h1>

        <b>Ejercicio 15: </b><p>Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición en el sentido de las agujas del reloj.
        La matriz debe tener 12 filas por 12 columnas y debe contener números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz
        original como la matriz resultado, ambas con los números convenientemente alineados.</p>

        <h3>RESULTADO:</h3>

        <div>
            <table>
                <tr>
                    <th colspan="12">MATRIZ ORIGINAL</th>
                </tr>
                <tr>
                <?php
                    for ($i = 0; $i < 12; $i++) {
                        for ($j = 0; $j < 12; $j++) {
                            $numero = rand(0, 100);
                            if($i == 0){
                              $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if ($i > 0 && $j == 0){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if ($i == 11){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if ($i > 0 && $j == 11){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if($i == 1 && $j < 11 && $j > 0){
                              $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else if ($i > 1 && $j == 1){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else if ($i == 10 && $j < 11){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else if ($i > 1 && $j == 10){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else{
                                $matriz[$i][$j] = $numero;
                                echo "<td>$numero</td>";
                            }
                        }
                        echo "</tr><tr>";
                    }
                ?>
                </tr>
            </table>
        </div>
        <?php
            for ($j = 0; $j < (12 / 2); $j++) {
                /* Fila de arriba */
                $ultimoFila = $matriz[$j][11 - $j];
                for ($i = 11 - $j; $i > $j; $i--) {
                    $matriz[$j][$i] = $matriz[$j][$i - 1];
                }
                /* Fila de la derecha */
                $ultimoFilaDerecha = $matriz[11 - $j][11 - $j];
                for ($i = 11 - $j; $i > ($j + 1); $i--) {
                    $matriz[$i][11 - $j] = $matriz[$i -  1][11 - $j];
                }
                $matriz[$j + 1][11 - $j] = $ultimoFila;
                $ultimoFila = $matriz[11 - $j][11 -$j];
                /* Fila de abajo */
                $ultimoFila = $matriz[11 - $j][$j];
                for ($i = $j; $i < 10 - $j; $i++) {
                    $matriz[11 - $j][$i] = $matriz[11 - $j][$i + 1];
                }
                $matriz[11 - $j][10 - $j] = $ultimoFilaDerecha;
                /* Fila izquierda */
                for ($i = $j; $i < 11 - $j; $i++) {
                    $matriz[$i][$j] = $matriz[$i + 1][$j];
                }
                $matriz[10 - $j][$j] = $ultimoFila;
            }
        ?>
        <div>
            <table>
                <tr>
                    <th colspan="12">MATRIZ ROTADA</th>
                </tr>
                <tr>
                <?php
                    for ($i = 0; $i < 12; $i++) {
                        for ($j = 0; $j < 12; $j++) {
                            $numero = $matriz[$i][$j];
                            if($i == 0){
                              $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if ($i > 0 && $j == 0){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if ($i == 11){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if ($i > 0 && $j == 11){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: red;\">$numero</td>";
                            }else if($i == 1 && $j < 11 && $j > 0){
                              $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else if ($i > 1 && $j == 1){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else if ($i == 10 && $j < 11){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else if ($i > 1 && $j == 10){
                               $matriz[$i][$j] = $numero;
                                echo "<td style=\"background-color: green;\">$numero</td>";
                            }else{
                                $matriz[$i][$j] = $numero;
                                echo "<td>$numero</td>";
                            }
                        }
                        echo "</tr><tr>";
                    }
                ?>
                </tr>
            </table>
        </div>
    </body>
</html>
