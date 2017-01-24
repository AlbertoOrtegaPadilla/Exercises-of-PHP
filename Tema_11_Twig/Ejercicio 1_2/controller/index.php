<?php
  require_once '../model/Articulo.php';
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);
  
  // Obtiene todas las Articulos
  $data['articulos'] = Articulo::getArticulos();
  
  foreach($data['articulos'] as $articulo)  {
      $articulos[] = array(
          'codigo' => $articulo->getCodigo(), 
          'titulo' => $articulo->getTitulo(),
          'fecha' => $articulo->getFecha(),
          'contenido' => $articulo->getContenido());    
  }
  
  $datos['articulos'] = $articulos;

  // Carga la vista de listado de Articulos
  echo $twig->render('listado.html.twig', $datos);
  
  