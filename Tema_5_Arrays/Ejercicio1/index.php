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
        
        <style>
            #multi{
                border: 1px solid #000;
                border-collapse: collapse;
            }
            #fila{
                border: 1px solid #000;
            }
        </style>

    </head>
    <body>
        
        <h1>TEMA 5</h1>
        
        <b>Ejercicio 1: </b><p>Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
        Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
        almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
        almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
        los tres arrays dispuesto en tres columnas.</p><br>
        
        <h3>RESULTADO:</h3><br>  
           
        <?php            
            $numero = [];
            $cuadrado = [];
            $cubo = [];
            for ($i = 0; $i < 20; $i++) {
                $numero[$i] =  rand(0, 100);                
            }
            
            for ($i = 0; $i < 20; $i++) {
                $cuadrado[$i] = $numero[$i] * $numero[$i];
            }
            
            for ($i = 0; $i < 20; $i++) {
                $cubo[$i] = $numero[$i] * $numero[$i] * $numero[$i];
            }
        ?>
                <center><table id="multi">
                    <tr id="fila">
                      <th id="fila"> NUMERO </th>
                      <th id="fila"> CUADRADO </th>
                      <th id="fila"> CUBO </th>
        <?php
            for ($i = 0; $i < 20; $i++) {
         ?>                  
                    </tr>
                    <tr id="fila">
                      <th id="fila"> <?php echo $numero[$i]?> </th>
                      <th id="fila"> <?php echo $cuadrado[$i]?> </th>
                      <th id="fila"> <?php echo $cubo[$i]?> </th>
                    </tr>
        <?php    
            }
        ?>
                </table></center>
    </body>
</html>