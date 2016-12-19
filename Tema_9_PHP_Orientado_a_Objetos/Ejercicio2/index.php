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
        <h1>Tema 9</h1>
        
        <b>Ejercicio 2: </b><p>Crea la clase Vehiculo, así como las clases Bicicleta y Coche como subclases de la primera. Para la
        clase Vehiculo, crea los métodos de clase getVehiculosCreados() y getKmTotales(); así como el
        método de instancia getKmRecorridos(). Crea también algún método específico para cada una de
        las subclases. Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes
        acciones:</p>
        
        <ul>
            <li>Anda con la bicicleta</li>
            <li>Haz el caballito con la bicicleta</li>
            <li>Anda con el coche</li>
            <li>Quema rueda con el coche</li>
            <li>Ver kilometraje de la bicicleta</li>
            <li>Ver kilometraje del coche</li>
            <li>Ver kilometraje total</li>
        </ul>

        <h3>RESULTADO:</h3>
        <?php
            include_once 'Bicicleta.php';
            include_once 'Coche.php';

            $miBici = new Bicicleta("21");
            $miCoche = new Coche(1900);

            $miBici->recorre(40);
            echo $miBici->hazCaballito()."<br>";
            $miCoche->recorre(200);
            echo $miCoche->quemaRueda()."<br>";
            echo "Recorrido Bicicleta ".$miBici->getKmRecorridos()." Km<br>";
            echo "Recorrido Coche".$miCoche->getKmRecorridos()." Km<br>";
            echo "Suma total del recorrido de todos los Vehículos: ".Vehiculo::getKmTotales()." Km<br>";
        ?>
    </body>
</html>
