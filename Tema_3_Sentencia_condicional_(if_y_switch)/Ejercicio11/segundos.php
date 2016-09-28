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
            $minutos = $_GET['m'];
            $horas = $_GET['h'];
            
            echo "<b>HORAS: $horas</b>, <b>MINUTOS: $minutos</b><br><br>";
            
            if ($horas >= 12 && $horas < 24) {
                
                $restoHoras = 23 - $horas;
                $horasMin = $restoHoras * 60;
                
                $restosMin = 60 - $minutos;
                $mintuoSegundos = ($horasMin + $restosMin) * 60;
                echo "Los segundos restantes para la media noche son $mintuoSegundos";
            }
            
            if ($horas >= 1 && $horas < 12) {
                
                $restoHoras = 23 - $horas;
                $horasMin = $restoHoras * 60;
                
                $restosMin = 60 - $minutos;
                $mintuoSegundos = ($horasMin + $restosMin) * 60;
                echo "Los segundos restantes para la media noche son $mintuoSegundos segundos.";
            }
        ?>
    </body>
</html>
