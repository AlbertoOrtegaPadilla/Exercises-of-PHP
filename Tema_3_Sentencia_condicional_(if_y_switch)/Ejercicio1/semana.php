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
        
        <h1>TEMA 3</h1>
        
        <b>RESULTADO: </b><br><br>
        
        <?php
        
            $dia = $_GET['s'];
            
            switch($dia) {
                case "lunes": // Bloque 1
                    echo "Empresa e Iniciativa Emprendedora. Con Isabel Gregory.";
                break;
                case "martes": // Bloque 2
                    echo "Diseño de Interfaces Web. Con Moisés Martínez.";
                break;
                case "miercoles": // Bloque 2
                    echo "Desarrollo Web en Entorno Cliente. Con Sergio Banderas.";
                break;
                case "jueves": // Bloque 2
                    echo "Desarrollo Web en Entorno Servidor. Con Luis José Sánchez.";
                break;
                case "viernes": // Bloque 2
                    echo "Desarrollo Web en Entorno Servidor. Con Luis José Sánchez.";
                break;
                default: // Bloque 3
                    echo "ERROR! <br><br>";
                    echo "Debe introducir un dia de la semana.";
            }
        ?>
    </body>
</html>
