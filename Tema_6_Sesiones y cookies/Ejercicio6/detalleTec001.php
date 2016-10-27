<?php
    session_start();            
?>

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
            body{
                background-color: #b6a4a4;
            }
            #cabecera {
                margin-top: 5%;
                margin-left: 8%;
                width: 100px;
                height: 100px;
            }
            #producto {
                width: 300px;
                height: 300px;
            }
            #descripcion {
                width: 550px;
                height: 300px;
                text-align: center;
            }
                form#comprar{
                    position: absolute;
                    top: 600px;
                    left: 890px;
                }
                form#volver{
                    position: absolute;
                    top: 600px;
                    left: 625px;
                }
            #comprar input{
                width: 130px;
                height: 50px;
                font-size: 14px;
                font-weight: bold;
                background-color: yellow;
                color: black;
                border: none;
            }
            #volver input{
                width: 130px;
                height: 50px;
                font-size: 14px;
                font-weight: bold;
                background-color: yellow;
                color: black;
                border: none;
            }
            #comprar input:hover{
                background-color: black;
                color: yellow;
                cursor: pointer;
            }
            #volver input:hover{
                background-color: black;
                color: yellow;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <center>
            <main>
                <h1>TECLADO+RATON</h1>
                <img src="img/cooler1a.jpg" id ="producto">
                <div id="descripcion">
                <h2>Cooler Master</h2>
                <p>El paquete Devastator incluye ratón y teclado para todo tipo de juegos. Estos
                   funcionan perfectamente para dar a los jugadores la mayor durabilidad, resistente
                   al desgaste y desgarre. También dan a los jugadores la ergonomía y mejoran sus
                   resultados de precisión. Lo convierten en un pack asequible otorgando todas las
                   características necesarias para mejorar su juego y ganar.</p>
                
                <form action="index.php" method="get" id="comprar">
                    <input type="hidden" name="codProducto" value="Tec001">
                    <input type="submit" value="Comprar">
                </form>
                <form action="index.php" method="get" id="volver">
                    <input type="submit" value="volver">
                </form>
            </main>
        </center>
    </body>
</html>