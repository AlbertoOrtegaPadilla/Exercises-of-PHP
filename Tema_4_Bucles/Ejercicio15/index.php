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
        
        <b>Ejericio 15: </b><p>Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque
        por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente
        introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y
        el 5, se deberán mostrar 2 elevado a 1, 2 elevado a 2, 2 elevado a 3, 2 elevado a 4, 2 elevado a 5.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $base = $_GET['base'];
            $exponenteFinal = $_GET['exponenteFinal'];

            if (!isset($base) && !isset($exponenteFinal)) { 
        ?>        
                <form action="index.php" method="get">
                    <input type="number" name="base">
                    <input type="number" name="exponenteFinal">
                    <input type="submit" value="Aceptar">
                </form>               
        <?php
            }else{
                for ($i = 1; $i <= $exponenteFinal; $i++) {
                    $potencia = 1;
                    $exponente = $i;
                    for ($j = 0; $j < $exponente; $j++) {
                      $potencia *= $base;
                    }
                    echo "$base<sup>$exponente</sup> = $potencia<br>";
                  }                
                }          
        ?>
    </body>
</html>
