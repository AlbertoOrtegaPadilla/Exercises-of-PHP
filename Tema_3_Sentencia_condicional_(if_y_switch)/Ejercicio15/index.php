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
        
        <b>Ejericio 15: </b><p>Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo
        infiel. El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes
        utilizar radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas
        contestadas con falso no suman puntos. Utiliza el fichero test_infidelidad.txt para obtener las
        preguntas y las conclusiones del programa.</p><br>
        
        <h2>Test de infidelidad</h2>
        
        <form action="infiel.php" method="post">
          <ol>
            <li>
              Tu pareja parece estar mas inquieta de lo normal sin ningun motivo
              aparente.<br>
              <input type="radio" name="r1" value="3">verdadero<br>
              <input type="radio" name="r1" value="0">falso<br>
            </li>
            
            <li>
              Ha aumentado sus gastos de vestuario.<br>
              <input type="radio" name="r2" value="3">verdadero<br>
              <input type="radio" name="r2" value="0">falso<br>
            </li>
            
            <li>
              Ha perdido el interes que mostraba anteriormente por ti.<br>
              <input type="radio" name="r3" value="3">verdadero<br>
              <input type="radio" name="r3" value="0">falso<br>
            </li>
            
            <li>
              Ahora se afeita y se asea con mas frecuencia (si es hombre) o ahora se
              arregla el pelo y se asea con mas frecuencia (si es mujer).<br>
              <input type="radio" name="r4" value="3">verdadero<br>
              <input type="radio" name="r4" value="0">falso<br>
            </li>
            
            <li>
              No te deja que mires la agenda de su telefono movil.<br>
              <input type="radio" name="r5" value="3">verdadero<br>
              <input type="radio" name="r5" value="0">falso<br>
            </li>
            
            <li>
              A veces tiene llamadas que dice no querer contestar cuando estas delante.<br>
              <input type="radio" name="r6" value="3">verdadero<br>
              <input type="radio" name="r6" value="0">falso<br>
            </li>
            
            <li>
              Actualmente se preocupa mas en cuidar su linea y/o estar bronceado/a.<br>
              <input type="radio" name="r7" value="3">verdadero<br>
              <input type="radio" name="r7" value="0">falso<br>
            </li>
            
            <li>
              Muchos dias viene tarde despues de trabajar porque dice tener mucho
              mas trabajo.<br>
              <input type="radio" name="r8" value="3">verdadero<br>
              <input type="radio" name="r8" value="0">falso<br>
            </li>
            
            <li>
              Has notado que ultimamente se perfuma mas.<br>
              <input type="radio" name="r9" value="3">verdadero<br>
              <input type="radio" name="r9" value="0">falso<br>
            </li>
            
            <li>
              Se confunde y te dice que ha estado en sitios donde no ha ido contigo.<br>
              <input type="radio" name="r10" value="3">verdadero<br>
              <input type="radio" name="r10" value="0">falso<br>
            </li>
          </ol>   
          <input type="submit" value="Aceptar">
        </form>

    </body>
</html>
