<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    include_once 'DadoPoker.php';
    //Si no se ha inicializado ningún dado. Creamos los dados e inicializamos las tiradas  a 0.
    if(!isset($_SESSION['dado1'])){
        for ($i = 1; $i <= 5 ; $i++){
            $_SESSION["dado".$i] = serialize(new Dados());
        }
      $_SESSION['tir'] = 0;
    }
    //Deserializamos los dados.
    for ($i = 1; $i <= 5 ; $i++){
        $_SESSION["dado".$i] = unserialize( $_SESSION["dado".$i]);
    }
    //Si se ha realizado una tirada de dados
    if(isset($_POST['tirada'])){
      for ($i = 1; $i <= 5 ; $i++){
        $_SESSION["dado".$i]->tira();
        $_SESSION['tir']++;
      }
    }
    //Introducimos en la clase las tiradas
    Dados::setTiradastotales($_SESSION['tir']);
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
        <h1>Tema 9</h1>
        
        <b>Ejercicio 3: </b><p>Crea la clase DadoPoker. Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
        7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
        aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura(), que
        diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
        método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
        Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.</p>

        <h3>RESULTADO:</h3>
              
        <?php
        //Si se ha realizado las tiradas se imprimen los dados.
        if($_SESSION['tir'] > 0){
          for ($i = 1; $i <= 5 ; $i++){
              echo $_SESSION["dado".$i]->nombreFigura()."<br>";
          }//Fin for
          echo "Tiradas Totales: ". Dados::getTiradastotales()/5;
        } //Fin if
        //Serializamos los objetos en variables de sesión.
        for ($i = 1; $i <= 5 ; $i++){
              $_SESSION["dado".$i] = serialize( $_SESSION["dado".$i]);
          }//Fin for
        ?>
        <form action="#" method="POST">
            <button type="submit" name="tirada">TIRAR DADOS</button>
        </form>
  </body>
</html>
