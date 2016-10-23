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
            #red{
                color: red;
            }
            #blue{
                color: blue;
            }
        </style>
    </head>
    <body>

        <h1>TEMA 5</h1>
        
        <b>Ejercicio 6: </b><p>Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
        pares de un color y los impares de otro.</p><br>
        
        <h3>RESULTADO:</h3><br>  

        <?php        
            $numero = $_GET['numero'];
            $contador = $_GET['contador'];
            $numeroTexto = $_GET['numeroTexto'];

            if (!isset($numero)) {
              $contador = 0;
              $numeroTexto = "";
            }
            if ($contador == 8) {
              $numeroTexto = $numeroTexto . " " . $numero; // añade el ultimo numero leido
              $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
              $numero = explode(" ", $numeroTexto); // función explode() para convertir la cadena de caracteres en un array.
              echo " PARES EN ROJO, IMPARES EN AZUL:<br>";
              for ($index = 0; $index < 8; $index++) {
                  
                  if ($numero[$index] % 2 == 0) {
                        echo "<h2 id = \"red\">$numero[$index]</h2> ";
                    }else{
                        echo "<h2 id = \"blue\">$numero[$index]</h2> ";
                    }
                }
            }
            if(!isset($_GET['numero']) || $contador < 8){
        ?>
                <form action="index.php" method="get">
                <input type="number" name ="numero" autofocus=""><br>
                <input type="hidden" name="contador" value="<?= ++$contador ?>">
                <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numero ?>" >
                <input type="submit" value="OK">
                </form>
        <?php
            }
        ?>
    </body>
</html>
