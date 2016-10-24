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
        
        <b>Ejercicio 11: </b><p>Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
        Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
        en español y dará la correspondiente traducción en inglés.</p><br>
        
        <h3>RESULTADO:</h3><br>  
     
        <?php
            $diccionario = array("rosa" => "rose", "nombre" => "name", "reloj" => "clock", "raton" => "mouse","cena" => "dinner","salida" => "exit",
                                    "casa" => "house", "padre" => "father", "papa" => "dad", "madre" => "mother","sarten" => "pan",
                                    "mama" => "mon", "coche" => "car", "motocicleta" => "motorcycle", "mesa" => "table","pan" => "bread",
                                    "silla" => "chair", "cocina" => "kitchen", "perro" => "dog", "gato" => "cat",);
            $palabra = $_GET['palabra'];
        ?>
        
            <form action="index.php" method="get">
                <input type="text" name ="palabra" autofocus="" required="">
                <input type="submit" value="OK">
            </form>
        <?php
            echo "<br><br>$palabra = $diccionario[$palabra]";
        ?>
    </body>
</html>
