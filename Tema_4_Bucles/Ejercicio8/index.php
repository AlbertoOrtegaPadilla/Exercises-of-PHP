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
        
        <b>Ejericio 8: </b><p>Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
        en una tabla (table en HTML).</p><br>
        
        <h3>RESULTADO:</h3><br>         
        
        <?php
                $numero=1000;
                echo '<form action="index.php" method="post">';
                echo '<input type="number" min=0 max=9999 name="numero" autofocus>';
                echo '<input type="submit" value="Continuar">';
                echo '</form>';
        
            if(isset($_POST['numero'])){
                $numero = $_POST['numero'];
                
            }
            
            if($numero > 0 && $numero < 1000){
            
                echo "<br><table>
                        <tr>
                          <td><strong> $numero * 1 = " . ($numero * 1) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 2 = " . ($numero * 2) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 3 = " . ($numero * 3) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 4 = " . ($numero * 4) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 5 = " . ($numero * 5) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 6 = " . ($numero * 6) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 7 = " . ($numero * 7) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 8 = " . ($numero * 8) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 9 = " . ($numero * 9) . "</strong></td>
                        </tr>
                        <tr>
                          <td><strong> $numero * 10 = " . ($numero * 10) . "</strong></td>
                        </tr>
                   </table>";
            }
            
            if($numero == 0){
               echo "<br><strong>0 no es un buen ejemplo para este ejercicio.</strong>";
            }
            

        ?>
    </body>
</html>
