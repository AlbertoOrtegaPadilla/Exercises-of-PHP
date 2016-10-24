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
        
        <b>Ejercicio 12: </b><p>Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio
        anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras
        y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas
        y cuántas erróneas.</p><br>
        
        <h3>RESULTADO:</h3><br>  
     
        <?php
            $castellano =[];
            $diccionario = array("rosa" => "rose", "nombre" => "name", "reloj" => "clock", "raton" => "mouse","cena" => "dinner","salida" => "exit",
                                    "casa" => "house", "padre" => "father", "papa" => "dad", "madre" => "mother","sarten" => "pan",
                                    "mama" => "mon", "coche" => "car", "motocicleta" => "motorcycle", "mesa" => "table","pan" => "bread",
                                    "silla" => "chair", "cocina" => "kitchen", "perro" => "dog", "gato" => "cat",);
        
            if (!isset($_GET['castellano'])) {
                // Extrae las palabras españolas
                foreach ($diccionario as $clave => $valor) {
                  $palabrasCastellano[] = $clave;
                }
                // Elige 5 palabras en español sin que se repita ninguna
                $contadorPalabras = 0;
                do {
                  $palabra = $palabrasCastellano[rand(0, 19)];
                  if (!in_array($palabra, $castellano)) {
                    $castellano[] = $palabra;
                    $contadorPalabras++;
                  }
                } while ($contadorPalabras < 5);
                echo '<center><form action="index.php" method="get">';
                    for ($i = 0; $i < 5; $i++) {
                      echo $castellano[$i]." ";
                      echo '<input type="text" name="ingles['.$i.']">';
                      echo '<input type="hidden" name="castellano['.$i.']" value="'.$castellano[$i].'"><br>';
                    }
                    echo '<input type="submit" value="ENVIAR">';
                echo '</form></center>';
    
            } else {
                $castellano = $_GET['castellano'];
                $ingles = $_GET['ingles'];
                for ($i = 0; $i < 5; $i++) {
                  if ($diccionario[$castellano[$i]] == $ingles[$i]) {
                    echo '<center><span style="color: green;">'.$castellano[$i].": ".$ingles[$i];
                    echo " - correcto</span><br></center>";
                  } else if ($ingles[$i] == ""){
                    echo '<center><span style="color: red;">'.$castellano[$i].":</span> casilla vacia"
                            . ", <span style=\"color: blue;\">".$diccionario[$castellano[$i]].".</span><br></center>";
                  }else{
                    echo '<center><span style="color: red;">'.$castellano[$i].": ".$ingles[$i];
                    echo " - incorrecto</span>, <span style=\"color: blue;\">".$diccionario[$castellano[$i]].".</span><br></center>";  
                  }
                }
            }
        ?>
    </body>
</html>
