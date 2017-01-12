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
        
        <h1>Nuevo Articulo</h1>
        <br>
        <div class="container">
            <form action="../Controller/grabaArticulo.php"  enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label>Título</label>
                    <input class="form-control" type="text" size="30" name="titulo">
                </div>
                <div class="form-group">
                    <label>Contenido</label>
                    <textarea class="form-control" name="contenido" cols="60" rows="6"></textarea>
                </div>
            <input class="btn btn-default" type="submit" value="Aceptar">
          </form>
      </div>
    </body>
</html>
