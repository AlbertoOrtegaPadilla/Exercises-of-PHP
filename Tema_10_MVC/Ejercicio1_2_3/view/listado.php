<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>Ejercicio MVC</title>
    </head>
    <body>
        <h1>BLOG</h1>
        <h4><a href="../Controller/nuevoArticulo.php">Nuevo articulo</a></h4>
        <hr>
        
        <?php
          foreach($data['articulos'] as $articulo)  {
          ?>
        <div class="container">
            <table class="table">
                <tr>
                    <th><?=$articulo->getTitulo()?></th>
                </tr>
                <tr>
                    <td><?=$articulo->getFecha()?></td>
                </tr>
                <tr>
                    <td><?=$articulo->getContenido()?></td>
                </tr>
                <tr>
                    <td>
                        <form action="../controller/modificarArticulo.php" method="POST">
                            <input type="hidden" name="codigo" value="<?=$articulo->getCodigo()?>">
                            <input type="hidden" name="titulo" value="<?=$articulo->getTitulo()?>">
                            <input type="hidden" name="contenido" value="<?=$articulo->getContenido()?>">
                            <button class="btn btn-default" type="submit" name="accion" value="Modificar">Modificar</button>
                        </form>
                        <a href="../controller/borrarArticulo.php?codigo=<?=$articulo->getCodigo()?>">Borrar</a>
                    </td>
                </tr>
            </table>
        </div>
          <?php
          }
        ?>
    </body>
</html>
