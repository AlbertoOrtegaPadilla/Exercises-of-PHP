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
        <h3>Mantemiento de clientes</h3>
        <?php         
            $conexion = new mysqli("localhost", "root", "");
            if ($conexion->connect_errno > 0) {
                echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
                die ("Error: " . $conexion->connect_error);
            } else {
                $conexion->select_db("banco");
                $conexion->set_charset("utf8");
                
                if (isset($_POST['accion'])) {
                    if($_POST['accion'] == "Nuevo cliente") {
                        $inserta = $conexion->query("INSERT INTO cliente VALUES (\"$_POST[dni]\", \"$_POST[nombre]\", \"$_POST[direccion]\", \"$_POST[telefono]\")");
                    }

                    if($_POST['accion'] == "Modificar") {
                        $modifica = $conexion->query("UPDATE cliente SET  nombre=\"$_POST[nombre]\", direccion=\"$_POST[direccion]\", telefono=\"$_POST[telefono]\" WHERE dni=\"$_POST[dni]\"");
                    }

                    if($_POST['accion'] == "Eliminar") {
                        $borra =  $conexion->query("DELETE FROM cliente WHERE dni=\"$_POST[dni]\"");
                    }
                }
                // Listado
                $consulta =  $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");
        ?> 
        <table>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
        <?php

            while ($registro = $consulta->fetch_object()) {
        ?>
                <tr>
                    <td><?=$registro->dni ?></td>
                    <td><?=$registro->nombre?></td>
                    <td><?=$registro->direccion?></td>
                    <td><?=$registro->telefono?></td>
                    <td>
                        <!-- Eliminar cliente -->
                        <form action="index.php" method="post">
                            <input type="hidden" name="dni" value="<?=$registro->dni?>">
                            <input type="hidden" name="accion" value="Eliminar">
                            <button type="submit">Eliminar</button>    
                        </form>
                    </td>
                    <td>
                        <!-- Modificar cliente -->
                        <form action="modificacion.php" method="post">
                            <input type="hidden" name="dni" value="<?=$registro->dni?>">  
                            <input type="hidden" name="nombre" value="<?=$registro->nombre?>">
                            <input type="hidden" name="direccion" value="<?=$registro->direccion?>">
                            <input type="hidden" name="telefono" value="<?=$registro->telefono?>">
                            <button type="submit">Modificar</button>
                        </form>
                    </td>
                </tr>
        <?php
            }   
        ?>
            <!-- Añadir un nuevo cliente -->
                <form action="index.php" method="post">
                    <input type="hidden" name="accion" value="Nuevo cliente">
            <tr>
                    <td><input type="text" name="dni" size="10"></td>
                    <td><input type="text" name="nombre"></td>
                    <td><input type="text" name="direccion"></td>
                    <td><input type="text" name="telefono"  size="12"></td>
                    <td colspan="2"><button type="submit">Nuevo cliente</button></td>
            </tr>
                </form>
        </table>
        <?php
            }
        ?>
    </body>
</html>
