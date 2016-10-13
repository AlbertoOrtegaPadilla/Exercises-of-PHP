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
        
        <b>Ejercicio 29: </b><p>Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno
        leído por teclado que no sean divisibles entre otro también leído de igual forma.</p><br>
        
        <h3>RESULTADO:</h3><br>  
           
        <?php
          $numeroG = $_POST['numeroG'];
          $numeroP = $_POST['numeroP'];
        
          if (!isset($numeroG)){
          ?>
            <form action="index.php" method="post">
              <h3>Introduzca un numero entero positivo:</h3>
              <input type="number" name="numeroG" min="0" autofocus="" required=""><br>
              <h3>Introduzca otro numero mas pequeño que el anterior:</h3>
              <input type="number" name="numeroP" min="0" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
        <?php
          } else {
            $cuenta = 0;
            $suma = 0;
            echo "Los numeros enteros positivos menores de $numeroG y que no son divisibles "
                    . "entre $numeroP son los siguientes: <br>";
            for ($i = 1; $i < $numeroG; $i++) {
              if (($i % $numeroP) != 0) {
                    if ($i < ($numeroG - 1)) {
                          echo "$i, ";
                      }else{
                          echo "$i.";
                      }  
                }
            }
          }
        ?>
    </body>
</html>
