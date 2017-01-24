<?php
  require_once '../model/Articulo.php';

  // inserta el articulo en la base de datos
  $articuloAux = new Articulo("", $_POST['titulo'], "", $_POST['contenido']);
  $articuloAux->insert();
  header("Location: index.php");
