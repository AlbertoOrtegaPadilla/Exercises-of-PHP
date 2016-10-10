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
        
        <b>Ejericio 22: </b><p>Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            for ($i = 2; $i <=100; $i++) {
                if ($i%2==0) {                    
                }else{
                    echo "$i ";
                }
            }
        ?>
    </body>
</html>
