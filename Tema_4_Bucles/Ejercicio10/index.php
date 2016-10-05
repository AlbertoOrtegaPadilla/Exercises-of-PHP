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
        
        <b>Ejericio 10: </b><p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
        teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
        terminado de introducir los datos cuando meta un número negativo.</p><br>
        
        <h3>RESULTADO:</h3><br> 
        
        <form action="index.php" method="get">
            <p>Introduzca el número positivo, negativo si quieres hacer la media: </p>
            <input type="number" name="numero">
            <input type="submit" value="Sumar">
            <?php
            //empty determina si una variable esta vacia, si es así, le añadimos "", que no esta vacia,le añadimos el get.
            if (empty($_GET['numero'])) { $numero="";} else { $numero=$_GET['numero'];}
            if (empty($_GET['total'])) { $total="";} else { $total=$_GET['total'];}
            if (empty($_GET['cantidad'])) { $cantidad="";} else { $cantidad=$_GET['cantidad'];}
            //isset($numero) Determina si una variable está definida y no es NULL
            if($numero < 0) {
                echo "<br><br>La media es: " . round($total/($cantidad-1),$precision=2);
            } else {
                    $total += $numero;
                    $cantidad++;
                }      
            ?>
            <input type="hidden" name="total" value="<?= $total?>">
            <input type="hidden" name="cantidad" value="<?= $cantidad?>">
            <br><br><br><a href="index.php">>> Volver</a>
        </form>
    </body>
</html>
