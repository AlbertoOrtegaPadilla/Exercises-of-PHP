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
          $n = $_GET['n'];

          $capicua = false;

          // numero de 1 cifra
          if ( $n < 10 ) {
            $capicua = true;
          }
          // numero de 2 cifras
          if (( $n >= 10 ) && ( $n < 100 )) {
            if ( floor($n / 10) == ($n % 10) ) {
              $capicua = true;
            }
          }
          // numero de 3 cifras
          if (( $n >= 100 ) && ( $n < 1000 )) {
            if ( floor($n / 100) == ($n % 10) ) {
              $capicua = true;
            }
          }
          // numero de 4 cifras
          if (( $n >= 1000 ) && ( $n < 10000 )) {
            if ((floor( $n / 1000 ) == ($n % 10) ) && ( (floor( $n / 100 ) % 10 )== (floor( $n / 10) % 10 ))) {
              $capicua = true;
            }
          }
          // numero de 5 cifras
          if ( $n >= 10000) {
            if ((floor( $n / 10000 ) == ($n % 10) ) && ( ( (floor($n / 1000) % 10) ) == (floor( $n / 10) % 10))) {
              $capicua = true;
            }
          }
          //Resultado de si es true o false;
          if ( $capicua ) {
            echo "El numero introducido  $n es capicua.";
          }else {
              echo "El numero introducido  $n no es capicua.";
            }
        ?>
    </body>
</html>
