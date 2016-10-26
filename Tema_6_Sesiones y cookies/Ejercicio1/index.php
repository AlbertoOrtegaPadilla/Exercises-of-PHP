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
        $_SESSION['total'] = 0;
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Tema 6</h1>
        
        <b>Ejercicio 1: </b><p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
        teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
        terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.</p>
        
        <h3>RESULTADO:</h3>
        
        <?php
            $n = $_POST['numero'];            
            if (!isset($n) || $n > 0) {
            
                if (isset($n)) {
                    $_SESSION['contador']++;
                }
                $_SESSION['total'] += $n;
        ?>
                <form action="index.php" method="post">
                    <input type="number" name="numero" autofocus="">
                    <input type="submit" value="Introducir">
                </form>
        <?php
            } else {
        ?>
                <p>La media de los números introducidos es: <?= $_SESSION['total']/$_SESSION['contador']?></p>
        <?php
                session_destroy();
            }
        ?>
    </body>
</html>
