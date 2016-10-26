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
        $_SESSION['sumaImpares'] = 0;
        $_SESSION['totalImpares'] = 0;
        $_SESSION['mayorPar'] = 0;
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Tema 6</h1>
        
        <b>Ejercicio 2: </b><p>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
        nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
        número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
        en el cómputo. Utiliza sesiones.</p>
        
        <h3>RESULTADO:</h3>
        
        <?php
            $n = $_POST['numero'];  
            if (isset($n)) {
                if ($n >= 0) {
                  $_SESSION['contador']++;

                  if (($n % 2) == 0) { // Par
                    if ($n > $_SESSION['mayorPar']) {
                      $_SESSION['mayorPar'] = $n;
                    }
                  } else { // Impar
                    $_SESSION['sumaImpares'] += $n;
                    $_SESSION['totalImpares']++;
                  }
                }
            }
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
                <p>La media de los impares: <?= $_SESSION['sumaImpares']/$_SESSION['totalImpares']?></p>
                <p>El mayor de los pares es: <?= $_SESSION['mayorPar']?></p>
        <?php
                session_destroy();
            }          
        ?>
    </body>
</html>