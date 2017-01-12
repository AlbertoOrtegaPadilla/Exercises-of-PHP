<?php
  require_once '../model/Articulo.php';
  
  $articuloAux = new Articulo($_GET['codigo']);
  $articuloAux->delete();
  header("Location: index.php");
