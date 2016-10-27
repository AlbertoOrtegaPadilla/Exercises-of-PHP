<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start(); // Inicio de sesión
    
    if(!isset($_SESSION['sesionIniciada'])) {
        $_SESSION['sesionIniciada'] = false;
        $_SESSION['usuario'] = "";
        $_SESSION['contrasena'] = "";
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                     
        <h1>Tema 6</h1>
        
        <b>Ejercicio 4: </b><p>Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
        programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
        con un nombre de usuario y contraseña correctos.</p>
        
        <h3>RESULTADO: LOGIN:</h3><br>
        <?php         
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
        
            if (isset($usuario) && isset($contrasena)) {
                
                $_SESSION['user'] = $usuario;
                $_SESSION['password'] = $contrasena;
                
                if (($usuario == "Alberto") && ($contrasena == "1234")) {
                    $_SESSION['sesionIniciada'] = true;
                    //<META HTTP-EQUIV=Refresh CONTENT="0; URL= sirve para redireccionar 
                    // a un URL que le especifiques en un tiempo que especificas tu también.
                    echo '<meta http-equiv="refresh" content="0; url=../Ejercicio3/index.php">';
                }else if (($usuario == "alberto") && ($contrasena == "1234")) {
                    $_SESSION['sesionIniciada'] = true;
                    echo '<meta http-equiv="refresh" content="0; url=../Ejercicio3/index.php">';
                } else {
                    $error = '<span style="color: red;">Usuario o contraseña incorrectos</span>';
                }
            }        
        ?>
            <center>
                <form action="index.php" method="post">
                    <input type="text" name="usuario" placeholder="Usuario" autofocus>
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <input type="submit" value="Login"><br>
                    <?= $error;?>
                </form>
            </center>
    </body>
</html>
