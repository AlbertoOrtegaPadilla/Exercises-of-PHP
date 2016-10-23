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
        
        <b>Ejercicio 7: </b><p>Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
        un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
        array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
        si es necesario.</p><br>
        
        <h3>RESULTADO:</h3><br>  

        <?php
            $array = [];
            $par = [];
            $impar = [];
            $contadorPar = 0;
            $contadorImpar = 0;
            $contador = 0;
            echo "ARRAY DESORDENADOS DE PARES E IMPARES<br>";
            echo "-----------------------------------------------------------------------<br>";
            for ($index = 0; $index < 20; $index++) {
                $array[$index] = rand(0, 100);
                echo "$array[$index] ";
            }
            echo "<br><br>";
            for ($index1 = 0; $index1 < 20; $index1++) {    

                if($array[$index1] % 2 == 0){
                    $par[$contadorPar] = $array[$index1];
                    $contadorPar++;
                }else{
                    $impar[$contadorImpar] = $array[$index1];
                    $contadorImpar++;
                }
            }
            echo "<br>";
            for ($index2 = 0; $index2 < $contadorPar; $index2++) {
                $array[$index2] = $par[$index2];
            }
            for ($index3 = $contadorPar; $index3 < 20; $index3++) {
                $array[$index3] = $impar[$contador];
                $contador++;
            }
            echo "ARRAY ORDENADOS DE PARES E IMPARES<br>";
            echo "-----------------------------------------------------------------------<br>";
            for ($index4 = 0; $index4 < 20; $index4++) {
                echo "$array[$index4] ";
            }
        ?>
    </body>
</html>
