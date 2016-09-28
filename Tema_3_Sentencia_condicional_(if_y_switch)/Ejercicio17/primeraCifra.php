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

          // dependiendo de las cifras que compone el numero sacara la primera cifra.
          if ($n<0){
            $n = -$n;
          }
          //1 cifra
          if ( $n < 10 ) {
            $primeraCifra = $n;
          }
          //De 2 cifras
          if (( $n >= 10 ) && ( $n < 100 )) {
            $primeraCifra = $n / 10;
          }
          //De 3 cifras
          if (( $n >= 100 ) && ( $n < 1000 )) {
            $primeraCifra = $n / 100;
          }
          //de 4 cifras
          if (( $n >= 1000 ) && ( $n < 10000 )) {
            $primeraCifra = $n / 1000;
          }
          //De 5 cifras
          if ( $n >= 10000 ) {
            $primeraCifra = $n / 10000;
          }
          //floor — Redondear fracciones hacia abajo, echo floor(4.3); -> 4
          echo "La primera cifra del numero introducido es ", floor($primeraCifra);
        ?>
    </body>
</html>
