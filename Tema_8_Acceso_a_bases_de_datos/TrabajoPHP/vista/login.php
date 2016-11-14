<!DOCTYPE html>

<!-- Las vistas, como su nombre nos hace entender, contienen el código de nuestra
aplicación que va a producir la visualización de las interfaces de usuario, o sea,
el código que nos permitirá renderizar los estados de nuestra aplicación en HTML.
En las vistas nada más tenemos los códigos HTML y PHP que nos permite mostrar la
salida.-->

<!-- En la vista generalmente trabajamos con los datos, sin embargo, no se realiza
un acceso directo a éstos. Las vistas requerirán los datos a los modelos y ellas 
se generará la salida, tal como nuestra aplicación requiera. -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceso a la pagina</title>
    </head>
    <body>
        <?php
            //Este paso es para desconectar al usuario.
            session_start();
            session_destroy();
        ?>
        <center>
            <h1>NOMBRE EMPRESA</h1>
            <br><br>
            <div>
                <form action="../controlador/login.php" method="POST">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <input type="text" name="usuario" placeholder="Usuario" title="Introduzca un usuario" required><br><br>
                        <input type="password" name="password" placeholder="Contraseña" title="Introduzca una contraseña" required><br><br>
                        <input type="submit" value="Entrar">
                        <input type="reset" value="Limpiar">
                    </fieldset>
                </form>
            </div>
        </center>
    </body>
</html>
