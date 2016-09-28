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
        
            $a = $_GET['nota1'];
            $b = $_GET['nota2'];
            $c = $_GET['nota3'];
            $media = ($a + $b + $c)/3;
            
            if ($media >= 0 && $media <= 30) {
                
                echo "Nota media de las tres notas = " . round($media, $precision = 2) . "<br>";     
                if ($media < 5) {
   
                  echo "Tu calificacion es INSUFICIENTE";
                } else if ($media >= 5 && $media < 6) {
                    
                    echo "Tu calificacion es un SUFICIENTE";
                    }else if ($media >= 6 && $media < 7) {
                        
                        echo "Tu calificacion es un BIEN";
                        }else if ($media >= 7 && $media < 8) {
                            
                            echo "Tu calificacion es un NOTABLE";
                            }else if ($media >= 8 && $media < 9) {
                                
                                echo "Tu calificacion es un SOBRESALIENTE";
                                }
            }else if ($media < 0){
                
                 echo "Tu nota media no puede ser negativo";
                }else{
                    
                    echo "La suma de tus notas no pueden sumar mas de 30";
                    }   
        ?>
    </body>
</html>
