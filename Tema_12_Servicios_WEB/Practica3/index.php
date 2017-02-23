<!DOCTYPE html>
<!--
    Ejemplos de llamadas al servicio:

        (url)index.php?moneda=pesetas&cantidad=1000
        (url)index.php?moneda=euros&cantidad=6
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Practica 2</title>
    </head>
    <body>
        <?php
        
            $moneda = $_GET['moneda'];
            $cantidad = $_GET['cantidad'];
            
            if($cantidad>0){
                
                if($moneda=='euros'){
                    $operacion = $cantidad*166.38;
                    $resultado[] = [
                        'moneda' => 'pesetas',
                        'cantidad'=> $operacion
                    ];
                    echo "Resultado en JSON: " . json_encode($resultado);
                } else if($moneda=='pesetas'){
                    $operacion = $cantidad/166.38;
                    $resultado[] = [
                        'moneda' => 'euros',
                        'cantidad'=> $operacion
                    ];
                    echo "Resultado en JSON: " . json_encode($resultado);
                } else{
                    echo "El tipo de moneda: " . $moneda . " es incorrecto, introduzca \"peseta\" o \"euros\" en el tipo de moneda.";
                }
            } else {
                echo "La cantidad introducida: " . $cantidad . "incorrecta.";
            }
        ?>
    </body>
</html>
