<!DOCTYPE html>
<!--
    (url)index.php?cantidad=10
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 4</title>
    </head>
    <body>
        <?php
        
            $numeroDeCartas = $_GET['cantidad'];
            
            $palos = ['Oro', 'Basto', 'Espadas', 'Copa'];
            $numeros = ['As','2','3','4','5','6','7','8','9','Sota','Caballo','Rey'];
            $baraja = [];
            
            if(($numeroDeCartas<40)&&($numeroDeCartas>0)){
                
                while($numeroDeCartas>0){
                    
                    $paloSeleccionado = $palos[rand(0,3)];
                    $numeroSeleccionado = $numeros[rand(0,11)];
                    
                    $carta = [
                      'numero' => $numeroSeleccionado,
                      'palo' => $paloSeleccionado
                    ];
                    
                    //in_array — Comprueba si un valor existe en un array
                    if(!in_array($carta, $baraja)){
                        $baraja[] = $carta;
                        $numeroDeCartas--;
                    }
                }
                
                echo "Resultado en JSON: " . json_encode($baraja);
            } else {
                echo "Cantidad de cartas incorrecta. El numero de cartas tiene que ser mayor que 1 y menor que 40";
            }
        ?>
    </body>
</html>
