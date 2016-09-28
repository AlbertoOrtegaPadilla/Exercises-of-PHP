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
            $ultCifra = $n % 10;
            
            echo "La ultima cifra de $n es ", $ultCifra;
        ?>
        
        <br><br>
        
        <a href="index.php">>> Volver</a>
    </body>
</html>
