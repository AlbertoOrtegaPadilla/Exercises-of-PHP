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
        
        <b>RESULTADO: </b><br>
        
        <?php
            
            $hora = $_GET['n'];
            
            if ($hora > 1 && $hora < 40) {
                
                echo "Has ganado esa semana " . $hora * 12 . " €";
                
            }else if($hora > 40){
                
                    echo "Has ganado esa semana " . $hora * 16 . " €";
                    
                }else {
                    
                    echo "No has introducido bien el parametro para calcular lo que has ganado en las horas extras.";
                }
        ?>
    </body>
</html>
