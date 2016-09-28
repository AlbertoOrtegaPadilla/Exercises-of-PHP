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
        
        <b>Ejericio 12: </b><p>Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
        el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
        obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
        de conocimientos en las diferentes asignaturas del curso.</p><br>
        
        <form action="cuestionario.php" method="get">
           <li>
              ¿Cual de los siguientes tipos de datos de Java tiene mas precision?<br>
              <input type="radio" name="r1" value="0">a) int<br>
              <input type="radio" name="r1" value="1">b) double<br>
              <input type="radio" name="r1" value="0">c) float<br>
            </li>
            
            <li>
              ¿Cual es el lenguaje que se utiliza para hacer consultas en las bases de datos?<br>
              <input type="radio" name="r2" value="0">a) XML<br>
              <input type="radio" name="r2" value="0">b) SELECT<br>
              <input type="radio" name="r2" value="1">c) SQL<br>
            </li>
            
            <li>
              Para insertar un hiperenlace en una pagina se utiliza la etiqueta...<br>
              <input type="radio" name="r3" value="0">a) href<br>
              <input type="radio" name="r3" value="1">b) a<br>
              <input type="radio" name="r3" value="0">c) link<br>
            </li>
            
            <li>
                ¿En que directorio se encuentran los archivos de configuracion de Linux?<br>
                <input type="radio" name="r4" value="1">a) /etc<br>
                <input type="radio" name="r4" value="0">b) /config<br>
                <input type="radio" name="r4" value="0">c) /cfg<br>
            </li>
            
            <li>
                ¿Cual de las siguientes memorias es volatil?<br>
                <input type="radio" name="r5" value="1">a) RAM<br>
                <input type="radio" name="r5" value="0">b) EPROM<br>
                <input type="radio" name="r5" value="0">c) ROM<br>
            </li>
            
          </ol>
          
          <input type="submit" value="Aceptar">
        </form>

        </form>
    </body>
</html>
