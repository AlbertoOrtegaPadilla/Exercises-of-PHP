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
        
        <b>Ejericio 14: </b><p>Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.</p><br>
        
        <h3>RESULTADO:</h3><br>  
        
        <?php
            $base = $_GET['base'];
            $exponente = $_GET['exponente']; 
            
            if (isset($base) && isset($exponente)) { 
                echo pow($base, $exponente);             
            }else{
        ?>
                <form action="index.php" method="get">
                    <input type="number" name="base">
                    <input type="number" name="exponente">
                    <input type="submit" value="Aceptar">
                </form>   
        <?php
            }    
        ?>
    </body>
</html>
