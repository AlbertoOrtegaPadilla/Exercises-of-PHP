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
            
        $hora = $_GET['h'];
            
            switch($hora) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:
                    echo "¡buenas noches!.";
                break;
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                case 11:
                case 12:
                    echo "¡buenos días!.";
                break;
                case 13:
                case 14:
                case 15:
                case 16:
                case 17:
                case 18:
                case 19:
                case 20:
                    echo "¡buenas tardes!.";
                break;
                case 21:
                case 22:
                case 23:
                case 24:
                    echo "¡buenas noches!.";
                break;
                default:
                    echo "ERROR! <br><br>";
                    echo "No has escrito bien la hora, te recuerdo que los tramos a escribir era e 6 a 12, de 13 a 20 y de 21 a 5.";
            }
        ?>
    </body>
</html>
