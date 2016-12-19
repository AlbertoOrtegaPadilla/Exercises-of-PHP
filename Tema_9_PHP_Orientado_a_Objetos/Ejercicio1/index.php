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
        
        <b>Ejercicio 1: </b><p>Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea, al menos,
        tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
        clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
        las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
        para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.</p>
        
        <h3>RESULTADO:</h3>
        
        <?php
            include_once 'Pinguino.php';
            include_once 'Gato.php';
            include_once 'Perro.php';
            include_once 'Lagarto.php';

            $garfield = new Gato("macho", "romano");
            echo $garfield->maulla() ."<br>";
            echo $garfield->ronronea() ."<br><hr>";

            $miLoro = new Ave("hembra");
            echo $miLoro->aseate()."<br>";
            echo $miLoro->ponHuevo()."<br>";
            echo $miLoro->vuela()."<br><hr>";

            $pingu = new Pinguino("hembra");
            echo $pingu->aseate()."<br>";
            echo $pingu->vuela()."<br>";
            echo $pingu->come("palomitas")."<br>";

            $laika = new Perro("hembra", "chucho");
            echo $laika->duerme()."<br>";
            echo $laika->dameLaPata()."<br>";
            echo $laika->amamanta()."<br>";
            echo $laika->cuidaCrias()."<br><hr>";

            $godzilla = new Lagarto("macho");
            echo $godzilla->tomaElSol()."<br>";
            echo $godzilla->duerme()."<br><hr>";
        ?>
    </body>
</html>
