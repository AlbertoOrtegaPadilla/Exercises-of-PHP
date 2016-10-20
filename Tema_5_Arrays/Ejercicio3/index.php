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
        
        <h1>TEMA 5</h1>
        
        <b>Ejercicio 3: </b><p>Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
        elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
        la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
        muestra el contenido del array</p><br>
        
        <h3>RESULTADO:</h3><br>  
           
        <?php
        $n = $_GET['n'];
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];

        if (!isset($n)) {
          $contadorNumeros = 0;
          //$numeroTexto = "";
        }

        if ($contadorNumeros == 15) {
          $numeroTexto = $numeroTexto . " " . $n; // añade el ultimo numero leido
          $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
          $numero = explode(" ", $numeroTexto); // función explode() para convertir la cadena de caracteres en un array.
          
            foreach ($numero as $n) {
              echo "$n ";
            }
            echo "<br>";
            //print_r(explode(" ",$numeroTexto));
        }
        $aux = $numero[14];

    for ($i = 14; $i > 0; $i--) {
       $numero[$i] = $numero[$i - 1];
    }

    $numero[0] = $aux;

        for ($index = 0; $index < $contadorNumeros; $index++) {

            echo "$numero[$index] ";
        }
        if (($contadorNumeros < 15) || (!isset($n))) {
    ?>
            <form action="index.php" method="get">
              <input type="number" name ="n" autofocus>
              <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
              <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
              <input type="submit" value="OK">
            </form>
    <?php
        }
    ?>
    </body>
</html>
