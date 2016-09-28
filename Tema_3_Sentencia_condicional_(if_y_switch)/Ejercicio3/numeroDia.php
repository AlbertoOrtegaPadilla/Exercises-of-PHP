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
        <?php
         
            $numero = $_GET['n'];
            
            switch($numero) {
                case 1:
                    echo "LUNES.";
                break;
                case 2:
                    echo "MARTES.";
                break;
                case 3:
                    echo "MIERCOLES.";
                break;
                case 4:
                    echo "JUEVES.";
                break;
                case 5:
                    echo "VIERNES.";
                break;
                case 6:
                    echo "SABADO.";
                break;
                case 7:
                    echo "DOMINGO";
                break;
                default:
                    echo "ERROR! <br><br>";
                    echo "No has escrito bien el numero, te recuerdo que los tramos a escribir era del 1 al 7.";
            }
        ?>
    </body>
</html>
