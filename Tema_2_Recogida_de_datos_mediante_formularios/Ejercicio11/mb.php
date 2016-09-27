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
        <h1>TEMA 2</h1>
        
        <b>Ejericio 11: </b>
        
        <h3>RESULTADO:</h3><br>
        
        <?php
            $mb = round($_GET['kb'] / 1024, $precision=2);
            echo $_GET['kb'] . " Kb en Mb es igual a : " . $mb . " Mb";
        ?>
    </body>
</html>
