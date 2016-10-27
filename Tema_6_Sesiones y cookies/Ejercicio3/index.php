<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start(); // Inicio de sesión
    
    if(!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 0;
        $_SESSION['totalAcumulado'] = 0;
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                
        <h1>Tema 6</h1>
        
        <b>Ejercicio 3: </b><p>Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
        su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
        el contador de los números introducidos y la media. Utiliza sesiones.</p>
        
        <h3>RESULTADO:</h3>
        
        <?php
            $n = $_POST['numero'];            
            if (!isset($n) || $n <= 10000) {
            
                if (isset($n)) {
                    $_SESSION['contador']++;
                }
                $_SESSION['totalAcumulado'] += $n;
        ?>
                <form action="index.php" method="post">
                    <input type="number" name="numero" autofocus="">
                    <input type="submit" value="Introducir">
                </form>
        <?php
            } else {
        ?>
            <p>Total acumulado : <?= $_SESSION['totalAcumulado']?></p>    
            <p>Cantidad de numeros introducidos : <?= $_SESSION['contador']?></p> 
            <p>La media de los números introducidos es: <?= $_SESSION['totalAcumulado']/$_SESSION['contador']?></p>
        <?php
                session_destroy();
            }
        ?>
    </body>
</html>
