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
          
          $puntos = 0;
          
          //Suma los puntos de la encuesta.
          foreach($_POST as $respuesta) {
            $puntos += $respuesta;
          }

          // Muestra el resultado del test
          if ( $puntos <= 10 ) {
            echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
          }

          if ( ($puntos > 11 ) && ($puntos <= 22) ) {
            echo "Quizas exista el peligro de otra persona en su vida o en su mente,";
            echo "aunque seguramente sera algo sin importancia. No bajes la guardia.";
          }

          if ( $puntos >= 22 ) {
            echo "Tu pareja tiene todos los ingredientes para estar viviendo un ";
            echo "romance con otra persona. Te aconsejamos que indagues un poco mas ";
            echo "y averigues que es lo que esta¡ pasando por su cabeza.";
          }
        ?>
    </body>
</html>
