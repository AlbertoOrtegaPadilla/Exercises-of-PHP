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
                <h1>PORTATIL</h1>
                <img src="img/toshiba1a.jpg" id ="producto">
                <div id="descripcion">
                <h2>Toshiba</h2>
                <p>Te presentamos el Toshiba Portegé Z30-B-10F, un portátil con un exterior realmente
                    atractivo y un interior de lo más potente gracias a su procesador Intel Core i5, 8GB
                    de RAM, 256GB SSD de disco duro interno y una pantalla de 13.3". Una auténtica máquina
                    en un espacio reducido.</p>
                
                <form action="index.php" method="get" id="comprar">
                    <input type="hidden" name="codProducto" value="Por001">
                    <input type="submit" value="Comprar">
                </form>
                <form action="index.php" method="get" id="volver">
                    <input type="submit" value="volver">
                </form>
            </main>
        </center>
    </body>
</html>
