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
        <style>   
            #cajaCerrada{
                width: 200px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        
        <h1>TEMA 4</h1>
        
        <b>Ejericio 7: </b><p>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
        programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
        “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
        satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</p><br>
        
        <h3>RESULTADO:</h3><br>         
        
        <?php
        $numeroSecreto = 4321;
            
            if (!isset($_POST['oportunidades'])) {
                $numeroIntroducido = 55555;
                $oportunidades = 4;
              } else {
                $oportunidades = $_POST['oportunidades'];
                $numeroIntroducido = $_POST['numeroIntroducido'];
              }
            
            if($numeroIntroducido != $numeroSecreto && $oportunidades == 4){
                echo "Tienes $oportunidades oportunidades.<br>";
            }else if($oportunidades < 4 && $oportunidades > 0 && $numeroIntroducido != $numeroSecreto){
                echo "Te quedan $oportunidades oportunidades<br>";
            }else if($oportunidades == 0){
                 echo "Te quedaste sin oportunidades, la caja fuerte ha sido bloqueada.<br><br>";
                 echo "<img src=\"IMG/blocked.png\">";
                 
            }else{
                echo "La combinación introducida es correcta, puede acceder a su caja fuerte<br>";
                echo "<img src=\"IMG/caja.png\">";
            }
            
            if(($oportunidades != 0) && ($numeroIntroducido != $numeroSecreto)){
                echo "Introduce un número de cuatro cifras.<br>";
                $oportunidades --;
                echo "<img src=\"IMG/cajaCerrada.png\" id=\"cajaCerrada\"><br>";
                echo '<form action="index.php" method="post">';
                echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
                echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
                echo '<input type="submit" value="Continuar">';
                echo '</form>';
            }
        
        ?>
        
        <br><br>
        <a href="index.php">>> Volver</a>

    </body>
</html>
