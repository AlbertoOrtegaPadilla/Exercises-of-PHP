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
        
        <b>Ejercicio 21: </b><p>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
        nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares . El
        número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
        en el cómputo.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $numero = $_GET['numero'];
            $cantidadDeNumeros = $_GET['cantidadDeNumero'];
            $cantidadDeImpares = $_GET['cantidadDeImpares'];
            $totalImpares = $_GET['totalImpares'];
            $mayorPar = $_GET['mayorPar'];
        ?>
        <?php
            if (isset($numero)) {               
                if ($numero > 0) {
                    $cantidadDeNumeros++;
               
                    if ($numero % 2 == 0) {
                        if ($numero > $mayorPar) {
                            $mayorPar = $numero;
                        }
                    } else {
                        $cantidadDeImpares++;
                        $totalImpares += $numero;
                    }                    
                } else {
                    echo "Cantidad de números introducidos: $cantidadDeNumeros";
                    echo "<br>Media de número impares: " . $totalImpares/$cantidadDeImpares;
                    echo "<br>Número par mayor: $mayorPar";
                }
            }
            if (!isset($numero) || $numero > 0) {
        ?>       
        <form action="index.php" method="get">
            Introduzca un número:
            <input type="number" name="numero" autofocus="">
            <input type="hidden" name="cantidadDeNumero" value=<?=$cantidadDeNumeros ?>>
            <input type="hidden" name="cantidadDeImpares" value=<?=$cantidadDeImpares ?>>
            <input type="hidden" name="totalImpares" value=<?=$totalImpares ?>>
            <input type="hidden" name="mayorPar" value=<?=$mayorPar ?>>
            <input type="submit" value="Introducir">
        </form>
        <?php           
            }
        ?>
    </body>
</html>
