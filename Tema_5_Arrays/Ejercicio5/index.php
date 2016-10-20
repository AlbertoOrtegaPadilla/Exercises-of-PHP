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
        
        <b>Ejercicio 5: </b><p>Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
        año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
        del diagrama se pueden dibujar a base de la concatenación de una imagen</p><br>
        
        <h3>RESULTADO:</h3><br>  

        <?php        
            if(!isset($_GET['temperatura'])){
                $mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                                "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        ?>
                <form action="index.php" method="get">
        <?php
                    for ($i = 0; $i < 12; $i++) {
                        echo "$mes[$i]: <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br>";
                    }
        ?>
                    <input type="submit" value="OK">
                </form>
        <?php
            } else {
                $temperatura = $_GET['temperatura'];
                echo "<table>";
                //$temperatura[$mes[i]] => $temperaturaMes, basicamente mete el valor
                // de cada array a la variable temperaturaMes en este foreach.
                foreach($temperatura as $mes => $temperaturaMes) {
                  echo "<tr><td>$mes </td><td>";
                  //Pinta la barra de $temperaturaMes
                  for ($i = 0; $i < $temperaturaMes; $i++) {
                    echo "<img src=\"img/red.jpg\" height=\"20\" width=\"20\">";
                  }
                  //Muestra temperatura del mes.
                  echo " $temperaturaMes"."ºC<br></td></tr>";
                }
                echo "</table>";
            }
        ?>     
    </body>
</html>
