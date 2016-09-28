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
      
          $puntos = $_GET['r1'] + $_GET['r2'] + $_GET['r3'] + $_GET['r4'] + $_GET['r5'];
          echo "Ha obtenido $puntos puntos.";
        ?>
        <br><br>
        <a href="index.php">>> Volver</a>

    </body>
</html>
