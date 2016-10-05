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
        
        <b>Ejericio 11: </b><p>Escribe un programa que muestre en tres columnas, el cuadrado y el cubo de los 5 primeros números
        enteros a partir de uno que se introduce por teclado.</p><br>
        
        <h3>RESULTADO:</h3><br>
        
        <form action="index.php" method="get">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">

            <?php
                if (empty($_GET['n'])) { $n="";} else { $n=$_GET['n'];}
                if ($n > 0){
                  echo "<br><table>
                            <tr>
                                <td> n</td>
                                <td> n<sup>2</sup></td>
                                <td> n<sup>3</sup></td>
                            </tr>";
                  for ($i = $n; $i < $n + 5; $i++) {
                    echo "<tr>
                            <td>" . $i . "</td>
                            <td>" . $i * $i . "</td>
                            <td>" . $i * $i * $i . "</td>
                         </tr>";
                  }
                  echo "</table>";  
                } 
            ?>
            <br><br><br><a href="index.php">>> Volver</a>
        </form>
    </body>
</html>
