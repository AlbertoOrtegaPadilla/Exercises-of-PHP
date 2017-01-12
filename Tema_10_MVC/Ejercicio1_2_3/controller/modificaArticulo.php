<?php
  require_once '../model/Articulo.php';

  // modifica el articulo en la base de datos
  $articuloAux = new Articulo($_POST['codigo'], $_POST['titulo'], "", $_POST['contenido']);
  $articuloAux->update();
  header("Location: index.php");
