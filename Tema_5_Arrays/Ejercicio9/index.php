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
        <style>
            #red{
                color: red;
            }
        </style>
    </head>
    <body>    
        
        <h1>TEMA 5</h1>
        
        <b>Ejercicio 9: </b><p>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
        continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
        pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
        menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
        la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
        Al final se debe mostrar el array resultante.</p><br>
        
        <h3>RESULTADO:</h3><br>  
     
        <?php
            if (!isset($_GET['n'])) {
                $contadorNumeros = 1;
            }else {
                $contadorNumeros = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
            }
            if ($contadorNumeros < 11) {
                $contadorNumeros = $_GET['contadorNumeros'];
                $n = $_GET['n'];
                $numeroTexto = $_GET['numeroTexto'];
                if ($numeroTexto == "") {
                    $numeroTexto = $n;
                } else {
                    $numeroTexto = $numeroTexto.' '.$n;
                }
                $contadorNumeros++;
            }
            if (!isset($_GET['n']) || ($contadorNumeros < 11)) {
        ?>
                <form action="index.php" method="get">
                    <input type="number" name ="n" autofocus="" required="">
                    <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
                    <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                    <input type="submit" value="OK">
                </form>
        <?php
            }
            // Se han introducido los números y hay que pedir las posiciones inicial y final
            if ($contadorNumeros == 11) {
                $numero = explode(" ", $numeroTexto);
                // Muestra el array original
                echo "<center><h3>ARRAY ORIGINAL:</h3><br><br>";
                echo "<table><tr>";
                for ($i = 0; $i < 10; $i++) {
                  echo "<td>$i</td>";
                }               
                echo "</tr><tr><td></td></tr>";
                // Contenido
                for ($i = 0; $i < 10; $i++) {
                  echo "<td>".$numero[$i]."</td>";
                }
                echo "</tr></table></center>";
                // Pide las posiciones inicial y final
        ?>
                <form action="index.php" method="get">
                  Posición inicial: <input type="number" name="inicial" autofocus="" min="0" max="9" required=""><br>
                  Posición final: <input type="number" name="final" min="0" max="9" required=""><br>
                  <input type="hidden" name="contadorNumeros" value="13">
                  <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
                  <!-- Este input es para mandar un valor a n y no se active el if !isset($_GET['n'] -->
                  <input type="hidden" name="n" value="basura">
                  <input type="submit" value="OK">
                </form>
        <?php
            }
            // Se han introducido los números y además las posiciones inicial y final
            if ($contadorNumeros == 13) {
                $inicial = $_GET['inicial'];
                $final = $_GET['final'];
                if (($inicial >= $final) || ($inicial < 0) || ($inicial > 9) || ($final < 0) || ($final > 9)) {
                  echo '<h3>Los datos introducidos no son correctos</h3>';
                } else {
                    $numero = explode(" ", $numeroTexto);
                    // Muestra el array original
                    echo "<center><h3>ARRAY ORIGINAL:</h3><br>";
                    echo "<table><tr>";
                    for ($i = 0; $i < 10; $i++) {
                      echo "<td>$i</td>";
                    }               
                    echo "</tr><tr><td></td></tr>";
                    // Contenido
                    for ($i = 0; $i < 10; $i++) {
                      echo "<td>".$numero[$i]."</td>";
                    }
                    echo "</tr></table></center>";
                    // Rotación, primer tramo
                    $auxiliar = $numero[$inicial];
                    for ($i = 0; $i <= $inicial; $i++) {
                        if($i == $inicial){
                            $numero[$i] = $numero[$final];
                        }
                    }
                    for ($i = $inicial; $i <= $final; $i++) {
                        if($i == $final){
                            $numero[$i] = $auxiliar;
                        }
                    }
                    // Muestra el array resultante
                    echo "<br><center><h4>Inicial: $inicial<br>Final: $final</h4><br>";
                    echo "<h3>ARRAY MODIFICADO:</h3><br>";
                    echo "<table><tr>";
                    for ($i = 0; $i < 10; $i++) {
                        if($i == $inicial){
                            echo "<td id = \"red\">".$i."</td>";
                        }else if ($i == $final){
                            echo "<td id = \"red\">".$i."</td>";
                        }else{
                            echo "<td>".$i."</td>";
                        } 
                    }               
                    echo "</tr><tr><td></td></tr>";
                    // Contenido
                    for ($i = 0; $i < 10; $i++) {
                        if($i == $inicial){
                            echo "<td id = \"red\">".$numero[$i]."</td>";
                        }else if ($i == $final){
                            echo "<td id = \"red\">".$numero[$i]."</td>";
                        }else{
                            echo "<td>".$numero[$i]."</td>";
                        } 
                    }
                    echo "</tr></table></center>";
                }
            }
        ?>
    </body>
</html>
