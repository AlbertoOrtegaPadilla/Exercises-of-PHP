<?php
  require_once '../model/Articulo.php';

  // Obtiene todas las Articulos
  $data['articulos'] = Articulo::getArticulos();

  // Carga la vista de listado de Articulos
  include '../View/listado.php';