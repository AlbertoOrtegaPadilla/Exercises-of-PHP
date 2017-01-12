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

        <h1>Modificacion De Articulo</h1>
        <br>
        <div class="container">
            <form action="modificaArticulo.php" method="post">
                <input type="hidden" name="codigo" value="<?=$_SESSION['codigo']?>">
                <div class="form-group">
                <label>Título</label>
                <input class="form-control" type="text" size="30" name="titulo" value="<?=$_SESSION['titulo']?>">
                </div>
                <div class="form-group">
                <label>Contenido</label>
                <textarea class="form-control" name="contenido" cols="60" rows="6"><?=$_SESSION['contenido']?></textarea>
                </div>
                <p><input class="btn btn-default" type="submit" value="Submit"></p>
            </form>
        </div>
    </body>
</html>
