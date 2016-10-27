<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    if(!isset($_SESSION['productos'])){
        $_SESSION['productos'] = array(
            "Por001" => ['Nombre' => 'Portatil', 'PVP'=>929, 'imagen' => 'img/toshiba1a.jpg'],
            "Tec001" => ['Nombre' => 'Teclado+Ratón', 'PVP'=>38, 'imagen' => 'img/cooler1a.jpg'],
            "Mon001" => ['Nombre' => 'Monitor', 'PVP'=>102, 'imagen' => 'img/lg1a.jpg'],
            "Pul001" => ['Nombre' => 'Pulsometro', 'PVP'=>25, 'imagen' => 'img/xia1a.jpg'],                    
        );
        $_SESSION['carrito'] = [];
        $_SESSION['pvp'] = 0;
    } else {
        // Codproducto = "Por001" "Tec001" "Mon001" "Pul001".
        $codProd = $_GET['codProducto'];
        // codProdEliminado = INPUT VALUE = "Por001" "Tec001" "Mon001" "ar001".
        $codProdEliminado = $_GET['codigoProductoEliminado'];
        if($codProd!=null){
            //AÑADE +1 A CADA PRODUCTO AGREGADO AL CARRITO, Codproducto = "Por001" "Tec001" "Mon001" "Pul001".
            $_SESSION['carrito'][$codProd]++;
            //SUMA PRECIO TOTAL DE PRODUCTOS AL CARRITO
            $_SESSION['pvp'] = $_SESSION['productos'][$codProd]['PVP'] + $_SESSION['pvp'];
        }
        if(($codProdEliminado!=null)&&($_SESSION['carrito'][$codProdEliminado]>0)){
            //RESTA -1 A CADA PRODUCTO AGREGADO AL CARRITO
            $_SESSION['carrito'][$codProdEliminado]--;
            //RESTA PRECIO TOTAL DE PRODUCTOS AL CARRITO
            $_SESSION['pvp'] = $_SESSION['pvp'] - $_SESSION['productos'][$codProdEliminado]['PVP'];
        }
    }       
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="enunciado">
            <h2 id="nada">Tema 6</h2>
        
            <b id="nada">Ejercicio 4: </b><p id="nada">Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
            programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
            con un nombre de usuario y contraseña correctos.</p>

            <h3 id="nada">RESULTADO:</h3>
        </div>
        <!-- LOGO Y NOMBRE DE LA EMPRESA --> 
        <header>
            <img src="img/logo.png" id="cabecera">
            <h1>../Informatica</h1>
        </header>
        <!-- CONTENEDOR DEL CARRITO --> 
        <div id="div">
            <img src="img/carrito.png" id="carrito"><br>
            <img src="img/toshiba1b.jpg" class="item"><br>
            <img src="img/cooler1b.jpg" class="item"><br>
            <img src="img/lg1b.jpg" class="item"><br>
            <img src="img/xia1a.jpg" class="item"><br>
            <!-- PRECIO TOTAL ACUMULADO --> 
            <div id="total">
                <h4 id="precioTotal">
                    <?php 
                        if($_SESSION['pvp']>0){
                            echo $_SESSION['pvp'], "€";
                        }                    
                    ?>
                </h4>
                <!-- CANTIDADES DE PRODUCTOS AÑADISO E INPUT PARA QUITAR PRODUCTOS AÑADIDOS -->
                <h4 id="cantidadPor"><?php echo $_SESSION['carrito']['Por001']; ?></h4>
                <form id="eliminarPor" class="eliminar">
                    <input type="hidden" name="codigoProductoEliminado" value="Por001">
                    <input type="submit" value="-">
                </form>
                <h4 id="catidadTec"><?php echo $_SESSION['carrito']['Tec001']; ?></h4>
                <form id="eliminarTec" class="eliminar">
                    <input type="hidden" name="codigoProductoEliminado" value="Tec001">
                    <input type="submit" value="-">
                </form>
                <h4 id="cantidadMon"><?php echo $_SESSION['carrito']['Mon001']; ?></h4>
                <form id="eliminarCasco" class="eliminar">
                    <input type="hidden" name="codigoProductoEliminado" value="Mon001">
                    <input type="submit" value="-">
                </form>
                <h4 id="cantidadPul"><?php echo $_SESSION['carrito']['Pul001']; ?></h4>
                <form id="eliminarPul" class="eliminar">
                    <input type="hidden" name="codigoProductoEliminado" value="Pul001">
                    <input type="submit" value="-">
                </form>  
            </div>
        </div>
        <!-- CONTENEDORES DE LOS PRODUCTOS --> 
        <main>
            <?php
                foreach($_SESSION['productos'] as $key => $value) {
                    echo "<form class=\"producto\" id=\"", $key, "\">";
                    //Muestra imagen del producto
                    echo "<img src=\"", $value['imagen'], "\">";
                    //Nombre del producto = "Portatil" "Androide" "Casco" "Arma de Fuego"
                    echo "<p>", $value['Nombre'], "</p>"; 
                    // Precio del producto = "929" "38" "102" "25"
                    echo "<h4>", $value['PVP'], " Euros</h4>";
                    // Codproducto = "Por001" "Tec001" "Mon001" "Pul001".
                    echo "<input type=\"hidden\" name=\"codProducto\" value=\"", $key, "\">";
                    echo "<input type=\"submit\" value=\"Comprar\">";
                    echo "</form>";
                }
            ?>
        </main>        
    </body>
</html>