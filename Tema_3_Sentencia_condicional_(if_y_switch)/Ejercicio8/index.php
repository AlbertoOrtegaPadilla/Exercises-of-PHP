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
        
        <b>Ejericio 8: </b><p>Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable
        o sobresaliente).</p><br>
        
        <form action="notaMedia2.php" method="get">
           <b>Primera nota: </b><input type="number" step="0.01" name="nota1"><br>
           <b>Segunda nota: </b><input type="number" step="0.01" name="nota2"><br>
           <b>Tercera nota: </b><input type="number" step="0.01" name="nota3"><br>
           <input type="submit" value="ENVIAR">
        </form>
    </body>
</html>
