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
        
        <b>Ejericio 23: </b><p>Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la
        suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
        el contador de los números introducidos y la media.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $n = $_GET['n'];
            $suma = $_GET['suma'];   
            
            if (isset($n) || $suma < 10000) {                
                $suma = $suma + $n;  
            }
            if ($suma > 10000) {
                    echo "La suma total es: $suma.";
                    echo "<br><a href=\"index.php\">>> Volver</a>";
                }
                
            if (!isset($n) || $suma < 10000) {
        ?>
                <form action="index.php" method="get">
                    <input type="number" name="n" autofocus="">
                    <input type="hidden" name="suma" value=<?=$suma ?>>
                    <input type="submit" value="Aceptar">
                </form><br>
        <?php
            }             
            
        ?>
    </body>
</html>
