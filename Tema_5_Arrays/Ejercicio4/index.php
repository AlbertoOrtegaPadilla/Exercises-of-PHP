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
            b{
                color: red;
            }
        </style>
    </head>
    <body>
                
        <h1>TEMA 5</h1>
        
        <b>Ejercicio 4: </b><p>Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
        separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
        cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
        Los números que se han cambiado deben aparecer resaltados de un color diferente.</p><br>
        
        <h3>RESULTADO:</h3><br>  

        <?php
            $n1 = $_GET['n1'];
            $n2 = $_GET['n2'];
            $array = [];
            $numeroTexto = $_GET['numeroTexto'];
            $contador;
                     
            if($contador < 1 && !isset($n1)){
                for ($index = 0; $index < 100; $index++) {
                    $array[$index]= rand(0, 20);
                    echo "$array[$index] ";
                    $numeroTexto = $numeroTexto . " " . $array[$index]; // añade el ultimo numero leido
                }
            }
            if(!isset($n1) && !isset($n2)){
                $contador = 0;
        ?>
                <form action="index.php" method="get">
                  <input type="number" name ="n1" autofocus>
                  <input type="hidden" name="contador" value="<?= ++$contador ?>">
                  <input type="hidden" name="numeroTexto" value="<?= $numeroTexto?>">
                  <input type="submit" value="OK">
                </form>
        <?php
            }
            if(isset($n1) && isset($n2)){
                $numeroTexto = substr($numeroTexto, 1);
                //print_r(explode(" ",$numeroTexto));
                $array2 = explode(" ", $numeroTexto);
                for ($i = 0; $i < 100; $i++) {
                    if($array2[$i] == $n1){
                        echo "<b>$array2[$i] </b>";
                    }else{
                        echo "$array2[$i] ";
                    }
                }
                echo"<br><br>";
                for ($index = 0; $index < 100; $index++) {
                
                    if($array2[$index] == $n1){
                        $array2[$index] = $n2;
                        echo "<b>$array2[$index] </b>";
                    }else{
                        echo "$array2[$index] ";
                    }
                }
            }  
        ?>
    </body>
</html>
