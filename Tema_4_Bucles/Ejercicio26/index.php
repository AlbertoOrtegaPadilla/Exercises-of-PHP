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
        
        <b>Ejercicio 26: </b><p>Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe
        dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número
        introducido.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $n=$_GET['numero'];
            $digito=$_GET['digito']; 
            if (!isset($n)) {
        
                
        ?>
        <form action="index.php" method="get">
          <input type="number" name="numero" min="0" autofocus="" required=""><br>
          <input type="number" name="digito" min="0" autofocus="" required=""><br>
          <input type="submit" value="Aceptar">
        </form>

        <?php
        }else{
           
            $volteado = 0;
            $longitud = 0;
            $posicion = 1;
            $numeroP = 0;
            
            $numero = $n;
            echo "Numero = $numero, digito = $digito.<br><br>";
            //Si $numero es 0 toma de longitud 1.
            if ($numero == 0) {
              $longitud = 1;
            }
            // le da la vueta al numero y calcula la longitud.
            while ($numero > 0) {
              $volteado = ($volteado * 10) + ($numero % 10);
              $numero = floor($numero / 10);
              $longitud++;
            }
            // comprueba la posicion o posiciones.
            while ($volteado > 0) {
              if (($volteado % 10) == $digito) {
                $numeroP++;
                echo "$numeroP posicion = $posicion.<br>";
              }
              $volteado = floor($volteado/10);
              $posicion++;
            }
          }
        ?>
    </body>
</html>
