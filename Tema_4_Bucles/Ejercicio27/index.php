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
        
        <h1>TEMA 4</h1>
        
        <b>Ejercicio 27: </b><p>Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número
        leído por teclado.</p><br>
        
        <h3>RESULTADO:</h3><br>  
            
        <?php
            $n=$_GET['numero'];

            if (!isset($n)) {
         
        ?>
            <form action="index.php" method="get">
              <input type="number" name="numero" min="0" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
        <?php
            }else{
            	echo "<center><table id = \"multi\">
                        <thead>
                                <tr id = \"fila\">
                                        <th id = \"fila\">Nº</th>
                                        <th id = \"fila\">Multiplo 3</th>
                                </tr>
                        </thead>

                        <tbody>";
                                for($i=1;$i<=$n;$i++){
                                        echo "<tr id = \"fila\">";
                                                echo "<td id = \"fila\"><center>$i</center></td>";
                                                if($i%3==0){
                                                        echo "<td id = \"fila\"><center>X</center></td>";
                                                }else{
                                                        echo "<td id = \"fila\"></td>";
                                                }
                                        echo "</tr>";
                                }
                        echo "</tbody>
                </table></center>";
            }
        ?>
    </body>
</html>
