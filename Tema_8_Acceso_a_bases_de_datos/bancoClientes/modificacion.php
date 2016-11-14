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
        <?php
            $dni = $_POST['dni'];
            $nombre = $_POST['nombre'];
            $direccion = $_POST['direccion'];
            $telefono = $_POST['telefono'];
          ?>
          <div>
            <div>
              <span></span>
              Modificación de datos del cliente
            </div>
            <div>
                <form action="index.php" method="post">
                <input type="hidden" name="ejercicio" value="01">
                DNI: <input type="text" name="dni" value="<?=$dni?>" readonly="readonly"><br>
                Nombre: <input type="text" name="nombre" value="<?=$nombre?>"><br>
                Dirección: <input type="text" name="direccion" value="<?=$direccion?>" size="60"><br>
                Teléfono: <input type="text" name="telefono" value="<?=$telefono?>"><br>
            </div>
                <div>
                  <!--<input type="submit" class="btn btn-success" name="accion" value="Modificar">-->
                    <button type="submit" name="accion" value="Modificar">Modificar</button>
                    <a href="index.php" role="button">Cancelar</a>
                </div> 
              </form>
          </div>
          <br><br>
        
    </body>
</html>
