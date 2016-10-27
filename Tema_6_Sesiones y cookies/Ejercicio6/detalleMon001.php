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
                <h1>MONITOR</h1>
                <img src="img/lg1a.jpg" id ="producto">
                <div id="descripcion">
                <h2>LG</h2>
                <p>Un tiempo de respuesta de dos ms para mejor disfrute de tus juegos
                    , películas y sucesos deportivos preferidos con la mayor calidad y
                    detalle. La velocidad de respuesta de estos monitores te va a dejar
                    ver vídeos o jugar a juegos para videoconsolas a lo largo de más
                    tiempo sin cansar tu vista.</p>
                <p>Pantalla de retroiluminación led brillante que da imágenes limpias,
                    genuinos negros y los colores más reales en una pantalla fina.</p>
                <form action="index.php" method="get" id="comprar">
                    <input type="hidden" name="codProducto" value="Mon001">
                    <input type="submit" value="Comprar">
                </form>
                <form action="index.php" method="get" id="volver">
                    <input type="submit" value="volver">
                </form>
            </main>
        </center>
    </body>
</html>