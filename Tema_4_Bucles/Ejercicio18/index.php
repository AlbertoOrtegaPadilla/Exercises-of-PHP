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
        
        <b>Ejericio 18: </b><p>Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos
        por teclado y validados como distintos, el programa debe empezar por el menor de los enteros
        introducidos e ir incrementando de 7 en 7.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            if ((!isset($n1)) || ($n1 == $n2)) {
        ?>
                <form action="index.php" method="get">
                    <input type="number" name="n1" autofocus=""><br>
                    <input type="number" name="n2">
                    <input type="submit" value="Aceptar">
                </form><br>
        <?php
            }else{                    
                if ($n1 > $n2) {
                    $aux = $n1;
                    $n1 = $n2;
                    $n2 = $aux;
                }
                for ($i = $n1; $i <= $n2; $i+=7) {
                    echo "$i ";
                }
                echo "<br><a href=\"index.php\">>> Volver</a>";
            }
        ?>
    </body>
</html>
