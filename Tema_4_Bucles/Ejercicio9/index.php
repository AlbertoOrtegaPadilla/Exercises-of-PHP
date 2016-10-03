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
        
        <b>Ejericio 9: </b><p>Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.</p><br>
        
        <h3>RESULTADO:</h3><br>
        
        <?php
            $numero=-1;           
            if(isset($_POST['numero'])){
                $numero = $_POST['numero'];                
            }

            echo '<form action="index.php" method="post">';
            echo '<input type="number" min=0 name="numero" autofocus>';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
            
            $digitos=0;
            if($numero > 0){
               do{
                    $numero = floor($numero/10);
                    $digitos++;
                }while($numero > 0); 
               
                echo "<br><strong>Numero de digitos: " . $digitos . "</strong>";
            }             
        ?>
    </body>
</html>
