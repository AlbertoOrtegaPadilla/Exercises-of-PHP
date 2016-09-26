<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 8 de PHP</title>
    </head>
    <body>
        <h1>TEMA 2</h1>
        
        <b>Ejericio 8: </b><p>Escribe un programa que calcule el salario semanal de un trabajador en base a 
        las horas trabajadas. Se pagarán 12 euros por hora.</p><br><br>
        
        <form action="horasTrabajo.php" method="get">
            <b>Numero de horas trabajado (40€ max. semana): </b><input type="number" min="1" max="40" name="h"><br><br>
           <input type="submit" value="ENVIAR">
        </form>
    </body>
</html>
