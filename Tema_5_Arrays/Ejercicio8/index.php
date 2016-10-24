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
        
        <b>Ejercicio 8: </b><p>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
        continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
        tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
        de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
        el array resultante.</p><br>
        
        <h3>RESULTADO:</h3><br>  

        <?php
            $n = $_GET['n'];
            $contadorNumeros = $_GET['contadorNumeros'];
            $numeroTexto = $_GET['numeroTexto'];
            if (!isset($n)) {
              $contadorNumeros = 0;
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
            }else{
                $numeroTexto = $numeroTexto . " " . $n; // añade el ultimo numero leido
                $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
                $numero = explode(" ", $numeroTexto); // función explode() para convertir la cadena de caracteres en un array.
                $primo = [];
                $noPrimo = [];
                $contadorPrimo = 0;
                $contadorNoPrimo = 0;
                $contador = 0;
                echo "<center>ARRAY DESORDENADOS DE PRIMOS E NO PRIMOS<br><br>";
                for ($index4 = 0; $index4 < 10; $index4++) {
                    echo "$index4 ";
                }
                echo "<br>------------------------------<br>";
                for ($index4 = 0; $index4 < 10; $index4++) {
                    echo "$numero[$index4] ";
                }
                echo "<br><br>";
                for ($index1 = 0; $index1 < 20; $index1++) {

                    if($numero[$index1] == 2){
                        $primo[$contadorPrimo] = $numero[$index1];
                        $contadorPrimo++;
                    }else if($numero[$index1] == 1){
                        $noPrimo[$contadorNoPrimo] = $numero[$index1];
                        $contadorNoPrimo++;

                    }else if($numero[$index1] != 1 && $numero[$index1] % 2 == 0){
                        $noPrimo[$contadorNoPrimo] = $numero[$index1];
                        $contadorNoPrimo++;
                    }else if ($numero[$index1] != 2 && $numero[$index1] % 2 != 0){
                        $primo[$contadorPrimo] = $numero[$index1];
                        $contadorPrimo++;
                    }
                }
                echo "<br>";
                for ($index2 = 0; $index2 < $contadorPrimo; $index2++) {
                    $numero[$index2] = $primo[$index2];
                }
                for ($index3 = $contadorPrimo; $index3 < 10; $index3++) {
                    $numero[$index3] = $noPrimo[$contador];
                    $contador++;
                }
                echo "ARRAY ORDENADOS DE PRIMOS E NO PRIMOS<br><br>";
                for ($index4 = 0; $index4 < 10; $index4++) {
                    echo "$index4 ";
                }
                echo "<br>------------------------------<br>";
                for ($index4 = 0; $index4 < 10; $index4++) {
                    echo "$numero[$index4] ";
                }
                echo "</center>";
            }
        ?>
    </body>
</html>
