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
        
        <b>Ejercicio 16: </b><p>Escribe un programa que diga si un número introducido por teclado es o no primo. Un número
        primo es aquel que sólo es divisible entre él mismo y la unidad.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $n = $_GET['n'];

        ?>        
                <form action="index.php" method="get">
                    <input type="number" name="n" autofocus>
                    <input type="submit" value="Aceptar">
                </form><br>
        <?php
        
        if (isset($n)) {
            if (($n % 2 == 0)) {
                echo "$n no es primo.";
            }else{
                echo "$n es primo.";
            }   
        }      
        ?>
    </body>
</html>
