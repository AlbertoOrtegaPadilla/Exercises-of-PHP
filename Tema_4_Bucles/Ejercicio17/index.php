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
        
        <b>Ejercicio 17: </b><p>Realiza un programa que sume los 100 números siguientes a un número entero y positivo
        introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
        positivo).</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $n = $_GET['n'];

            if (!isset($n)) {
        ?>
                <form action="index.php" method="get">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                </form><br>
        <?php
            } 
            
            if (isset($n)) {
                $n1 = $n + 1;
                $suma;
                for ($i = 0; $i < 100; $i++) {
                    $suma = $suma + $n1;
                    $n1++;
                    //echo "$n1, ";
                }
                
                echo "La suma total es: $suma.";
                echo "<br><a href=\"index.php\">>> Volver</a>";
            }
        ?>
    </body>
</html>
