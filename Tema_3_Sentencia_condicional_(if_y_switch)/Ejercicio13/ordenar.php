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
        
        <h1>TEMA 3</h1>
        
        <b>RESULTADO: </b><br><br>
        
        <?php
        
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $n3 = $_GET['n3'];

            // ordena de menor a mayor los 2 primeros numeros.
            if ($n1 > $n2) {
                $aux = $n1;
                $n1 = $n2;
                $n2 = $aux;
            }

            // ordena de menor a mayor los 2 ultimos numeros.
            if ($n2 > $n3) {
                $aux = $n2;
                $n2 = $n3;
                $n3 = $aux;
            }

            // se vuelven a ordenar los dos primeros
            if ($n1 > $n2) {
                $aux = $n1;
                $n1 = $n2;
                $n2 = $aux;
            }
            
            echo "Los numeros ordenados de menor a mayor son: $n1, $n2 y $n3."; 
        ?>
    </body>
</html>
